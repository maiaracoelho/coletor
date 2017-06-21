var server = require('./server.js').server;

server.listen(8090, function() {
  console.log('%s listening at %s', server.name, server.url);
});
