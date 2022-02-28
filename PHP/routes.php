<?php
$request_url = str_replace('routes.php/', '', $_SERVER['REQUEST_URI']);

switch ($request_url) {
    case '/hello':
        include('routes/hello/hello.php');
        hello();
        break;
    case '/hello/':
        include('routes/hello/hello.php');
        hello();
        break;
    default:
        if (substr($request_url, 0, 7) === '/hello/') {
            include('routes/hello/hello_name.php');
            hello_name(str_replace('/hello/', '', $request_url));
        } else {
            include('handlers/404_not_found.php');
            not_found();
        }
        break;
}
?>