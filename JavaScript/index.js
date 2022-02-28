const http = require('http');

http.createServer((req, res) => {
    if (req.url === '/hello' || req.url === '/hello/') {
        res.write('Hello, World!');
        res.end();
    } else if (req.url.startsWith('/hello/')) {
        res.write(`Hello, ${decodeURI(req.url.replace('/hello/', ''))}!`);
        res.end();
    } else {
        res.writeHead(404);
        res.write('Not found!');
        res.end();
    }
}).listen(8000);