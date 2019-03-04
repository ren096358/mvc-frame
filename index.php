<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controllers\IndexController;

date_default_timezone_set("Asia/Taipei");

$controller = new IndexController();
$msg = $controller->run();
echo $msg;
