<?php 

$url = $_SERVER['REQUEST_URI'];

echo $url;

switch($url){
    case '/':
        echo 'home';
        break;
    case '/about':
        echo 'about';
        break;
    default:
        echo '404';
        break;
}