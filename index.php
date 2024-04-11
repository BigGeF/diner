<?php
require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function (){
    echo <h1>hello</h1>
});
$f3->run();