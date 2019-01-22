var http = require('http');
var express = require('express');
var app = express();
var mysql = require('mysql');
var bodyParser = require('body-parser');

var bdd = mysql.createPool({
    host : 'localhost',
    user : 'root',
    password : 'root',
    database : 'web_project'
});

bdd.getConnection(function(err, connection){
    if (err) throw err;
    connection.query('SELECT * from name where idname = 1;',function(error,results,fields){
        connection.release();
        if (error) throw error;
    });

})

