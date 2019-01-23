var http = require('http');
var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

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
    database : 'web_project'
});
// Test de la connection
bdd.connect(function(err) {
    if(err) throw err;
    console.log('Connected ...')
})

// Gestion des utilisateurs par les méthodes http	
app.get('/user', function (req, res) {
   bdd.query('select * from user', function (error, results, fields) {
      if (error) return res.status(500).send("There was a problem finding the information to the database.");
      res.send(JSON.stringify(results));
      res.end();
	});
});

app.get('/user/:id', function (req, res) {
    bdd.query('select * from user where idname = ?',[req.params.id], function (error, results, fields) {
       if (error) res.status(500).send("There was a problem finding the information about the user you want");
       res.send(JSON.stringify(results));
       res.end();

    });
 });
 
app.post('/user/add/', function(req,res) {
    var sql = {idname: 15, name: 'Yi', firstname:'kes'};
        bdd.query('insert into user set ?',sql,function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.delete('/user/delete/:id', function(req,res){
    bdd.query('delete from user where idname = ? ',[req.params.id], function(error, results, fields){
        if (error) res.status(500).send("There was an error deleting the user from database.");
        res.end();
    })
})

app.put('/user/put', function(req,res){
    bdd.query('UPDATE `user` SET `Name`=?, `Firstname`=? where idname=?', [req.body.Name, req.body.Firstname, req.body.idname], function(error, results, fields) { 
       if(error) throw error;
       res.send(JSON.stringify(results));
       res.end();

    })
})

// Gestion des événements par les méthodes http

app.get('/event', function(req,res){
    bdd.query('SELECT * from evenement',function(error,results,fields){
        if(!error){
            res.send(JSON.stringify(results));
            res.end();
        }
    })
})

app.get('/event/:id', function (req, res) {
    bdd.query('select * from evenement where id_evenement = ?',[req.params.id], function (error, results, fields) {
       if (error) res.status(500).send("There was a problem finding the information about the user you want");
       res.send(JSON.stringify(results));
       res.end();

    });
 });
 
 app.post('/event/add/:name/:des', function(req,res) {
    var sql = {Evenement_name: req.params.name,Evenement_description: req.params.des};
        bdd.query('insert into evenement set ?',sql,function(error,results,fields){
        if (error) throw error;
        res.status(200).send("Success !")
        res.end();
    });    
})

app.delete('/event/delete/:id', function(req,res){
    bdd.query('delete from evenement where idevenement = ? ',[req.params.id], function(error, results, fields){
        if (error) res.status(500).send("There was an error deleting the event from database.");
        res.end();
    })
})

app.put('/event/put', function(req,res){
    bdd.query('UPDATE `evenement` SET `Evenement_name`=?, `Evenement_description`=? where id_evenement=?', [req.body.Evenement_name, req.body.Evenement_description, req.body.idname], function(error, results, fields) { 
       if(error) throw error;
       res.send(JSON.stringify(results));
       res.end();

    })
})
