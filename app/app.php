<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('../vendor/autoload.php');

$router = new App\Core\Router(new App\Core\Request);

$router->get('/', function() {
  return "Welcome " . con(new App\Model\User(), 'abcd');
});


$router->get('/ping', function() {
  return "ping";
});


function con(String $s1, string $s2 )
{
    return $s1 . $s2;
}
