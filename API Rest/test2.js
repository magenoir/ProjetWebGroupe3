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
	
//rest api to get all customers
app.get('/name', function (req, res) {
   bdd.query('select * from name', function (error, results, fields) {
	  if (error) throw error;
	  res.end(JSON.stringify(results));
	});
});