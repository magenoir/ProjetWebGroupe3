var express = require('express');

var hostname = 'localhost';

var port = 3000;

var app = express();

var myRouter = express.Router();

myRouter.route('/bg')

.get(function(req,res){
    res.json({message : "Liste des bgs comme Félix", methode : req.method});
})

.post(function(req,res){
    res.json({message : "Ajout un bgs comme Félix", methode : req.method });
})

.put(function(req,res){
    res.json({message : "Mis à jour des bgs comme Félix", methode : req.method});
})

.delete(function(req,res){
    res.json({message : "Suppression des non-bgs comme Gaël", methode : req.method});
})

myRouter.route('/')

.all(function(req,res){
    res.json({message : "Bienvenue aux bgs comme Félix", methode : req.method});
})

app.use(myRouter);

app.listen(port,hostname, function() {
    console.log("Serveur fonctionnant sur http://"+hostname+":"+port);
});

