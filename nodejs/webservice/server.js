let http = require('http');
let fs = require('fs');
let url = require('url');


//创建服务器
http.createServer(function (request,responsee) {
    //解析请求，包括文件名
    let pathname = url.parse(request.url).pathname;

    //输出请求的文件名
    console.log('Request for' + pathname + 'received.');

    //从文件系统中读取请求的文件内容
    fs.readFile(pathname.substr(1),function (err,data) {
        if(err){
            console.log(err);
            responsee.writeHead(404,{'Content-Type':'text/html;charset=utf8'});
        }else{
            responsee.writeHead(200,{'Content-Type':'text/html;charset=utf8'});

            //响应文件内容
            responsee.write(data.toString());
        }
        //发送相应数据
        responsee.end();
    });

}).listen(8080);

//控制台输出以下信息
console.log('Server running at http://127.0.0.1:8080/');