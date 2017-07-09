var http = require('http');
var fs = require('fs');

function onRequest(request, response) {
  response.writeHead(200, {'Content-Type':'text/html'});
  // response.write('Hello world');
  setTimeout(function(){
    fs.readFile('./node.html', null, function(error, data){
      if (error) {
        response.writeHead(404);
        response.write('File not found!');
      } else {
        response.write(data);
      }
      response.end();
    });
  }, 1000);
  // response.end();
}
http.createServer(onRequest).listen(8000, function(){
  console.log('Server is listening on port 8000');
});
