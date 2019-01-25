var http = require('http');
var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');
const jwt = require('jsonwebtoken');
const jwtVerifer = require('express-jwt');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

const user = {email: 'truc@gmail.com', password: 1234};
const secret = 'secret';

function createToken(){
    let expirationDate = Math.floor(Date.now() / 1000) + 30
    var token = jwt.sign({userID: user.email, exp: expirationDate}, secret);
    return token;  
}


//Initialisation du serveur

var server = app.listen(3000,"127.0.0.1",function(){
    var host = server.address().address;
    var port = server.address().port;
});

//Configuration de la connection à la BDD
var bdd = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : 'root',
    database : 'bddpw'
});
// Test de la connection
bdd.connect(function(err) {
    if(err) throw err;
    console.log('Connected ...')
})

// Gestion des utilisateurs par les méthodes http	
app.get('/api/user', function (req, res) {
   bdd.query('select * from user', function (error, results, fields) {
      if (error) return res.status(500).send("There was a problem finding the information to the database.");
      res.send(JSON.stringify(results));
      res.end();
	});
});

app.get('/api/user/:id', function (req, res) {
    bdd.query('select * from user where idname = ?',[req.params.id], function (error, results, fields) {
       if (error) res.status(500).send("There was a problem finding the information about the user you want");
       res.send(JSON.stringify(results));
       res.end();

    });
 });

 app.get('/api/user', function (req, res) {
    bdd.query('select * from user where user_name = ? and user_mail = ?',[req.body.user_name, req.body.user_mail], function (error, results, fields) {
       if (error) res.status(500).send("There was a problem finding the information about the user you want");
       res.send(JSON.stringify(results));
       res.end();

    });
 });
 
app.post('/api/user/:name/:firstname/', function(req,res) {
    var sql = {nom: req.params.name, prenom: req.params.firstname};
        bdd.query('insert into utilisateur set ?',sql,function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.post('/api/user/az/', function(req,res) { 
        bdd.query('insert into utilisateur set nom=?, prenom =? ',[req.body.nom, req.body.prenom],function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.post('/api/user/', function(req,res) { 
    bdd.query('insert into user set user_name= ?, user_firstname= ?, user_mail= ?, user_password= ?, Id_center= ?',[
        req.body.user_name,
        req.body.user_firstname,
        req.body.user_mail,
        req.body.user_password,
        req.body.Id_center
        ],function(error,results,fields){
    if (error) throw error;
    res.status(200).send("Success !")
    res.end();
});    
})



app.delete('/api/user/:id', function(req,res){
    bdd.query('delete from user where idname = ? ',[req.params.id], function(error, results, fields){
        if (error) res.status(500).send("There was an error deleting the user from database.");
        res.end();
    })
})

app.put('/api/user', function(req,res){
    bdd.query('UPDATE `utilisateur` SET `Name`=?, `Firstname`=? where idname=?', [req.body.Name, req.body.Firstname, req.body.idname], function(error, results, fields) { 
       if(error) throw error;
       res.send(JSON.stringify(results));
       res.end();

    })
})

// Gestion des événements par les méthodes http

app.get('/api/event', function(req,res){
    bdd.query('SELECT * from evenement',function(error,results,fields){
        if(!error){
            res.send(JSON.stringify(results));
            res.end();
        }
    })
})

app.get('/api/event/:id', function (req, res) {
    bdd.query('select * from evenement where id_evenement = ?',[req.params.id], function (error, results, fields) {
       if (error) res.status(500).send("There was a problem finding the information about the user you want");
       res.send(JSON.stringify(results));
       res.end();

    });
 });
 
 app.post('/api/event/add/:name/:des', function(req,res) {
    var sql = {Evenement_name: req.params.name,Evenement_description: req.params.des};
        bdd.query('insert into evenement set ?',sql,function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.post('/api/event/', function(req,res) { 
    bdd.query('insert into event set event_name= ?, event_description= ?,event_date = ?, event_location= ?, id_user= ?',[
        req.body.event_name,
        req.body.event_description,
        req.body.event_date,
        req.body.event_location,
        req.body.id_user
        ],function(error,results,fields){
    if (error) throw error;
    res.status(200).send("Success !")
    res.end();
});    
})

app.delete('/api/event/:id', function(req,res){
    bdd.query('delete from evenement where idevenement = ? ',[req.params.id], function(error, results, fields){
        if (error) res.status(500).send("There was an error deleting the event from database.");
        res.end();
    })
})

app.put('/api/event', function(req,res){
    bdd.query('UPDATE `evenement` SET `Evenement_name`=?, `Evenement_description`=? where id_evenement=?', [req.body.Evenement_name, req.body.Evenement_description, req.body.idname], function(error, results, fields) { 
       if(error) throw error;
       res.send(JSON.stringify(results));
       res.end();

    })
})

// Gestion des photos 

app.get('/api/picture', function(req,res){
    bdd.query('SELECT * from picture',function(error,results,fields){
        if(!error){
            res.send(JSON.stringify(results));
            res.end();
        }
    })
})

app.get('/api/picture/:id', function(req,res){
    bdd.query('SELECT * from picture where id = ?',req.params.id,function(error,results,fields){
        if(!error){
            res.send(JSON.stringify(results));
            res.end();
        }
    })
})

app.post('/api/picture/:photo/:root', function(req,res) {
    var sql = {picture_name: req.params.photo,picture_root: req.params.picture_root};
        bdd.query('insert into picture set ?',sql,function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.post('/api/login', function(req,res) {
    if (req.body.email == user.email && req.body.password == user.password){
        res.send(createToken());
    } else {
        res.sendStatus(400);
    }
});

app.get('/api/home', jwtVerifer({secret: secret}), function(req, res){
    res.send('GG');
})

app.use((err, res, next)=>{
    if(err.name === 'UnauthorizedError') {
        res.status(500).send(err.message);
    }
})

