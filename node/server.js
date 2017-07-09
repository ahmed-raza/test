var express = require('express');
var path = require('path');
var app = express();
var fs = require('fs');

app.set('view engine', 'jade');
app.use(express.static(path.join(__dirname, '/public')));

var mysql = require('mysql');

var port = 8000;

var conn = mysql.createConnection({
    host : 'localhost',
    user : 'root',
    password : '',
    database : 'test'
});

conn.connect();

app.get('/', function(request, response){
  setTimeout(function(){
    conn.query('select * from example', function(error, results){
        if ( error ){
            response.status(500).send('Error in database operation');
        } else {
          response.render('index',{items: results});
          // response.end();
        }
    });
  }, 1000);
});

app.listen(port, function () {
    console.log('Server is listening on port '+port);
});
