var restify    = require('restify');
var fs         = require('fs');
var bodyParser = require('body-parser')
var path = require('path');

function create_log(req, res, next){
    var message = req.body.msg + "\n";

    fs.appendFile('Logs/' + new Date().getTime() + '.txt', message, function (err) {
        if(err) throw new Error("Erro ao atualizar arquivo!");
        res.send({code: 'success', message: 'Log add!'});
        next();
    });
}

//function list_videos(req, res, next) {	
//	fs.readFile("http://192.168.0.2:9090/public/Videos_Link/videos_link.txt", 
//	"utf8", function(err, files) {
	//	if(err) throw new Error("Erro ao carregar arquivo!");
	//	res.send(files);
   //		console.log(files);
   //     	next();
 //	});
//}

var server = restify.createServer();
server.use(bodyParser.urlencoded({ extended: false }))
// parse application/json 
server.use(bodyParser.json())

server.post('/log', create_log);
//server.get('/listvideos', list_videos);
exports.server = server;
