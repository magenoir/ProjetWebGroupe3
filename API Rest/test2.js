var http = require('http');
var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({
    extended: true
}));

var server = app.listen(3000,"127.0.0.1",function(){
    var host = server.address().address;
    var port = server.address().port;
});

var bdd = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : 'root',
    database : 'web_project'
});

bdd.connect(function(err) {
    if(err) throw err;
    console.log('Connected ...')
})
	
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
 
app.post('/user/add', function(req,res) {
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
       
    })
})
 