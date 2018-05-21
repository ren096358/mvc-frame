<?php

require_once 'ActionListener.php';
require_once 'Event.php';

require_once 'controller/IndexController.php';
require_once 'actions/ShowIndexPageAction.php';

date_default_timezone_set("Asia/Taipei");

if (isset($_GET['action'])) {
    $controller = null;
    $controller = new IndexController();
    $msg = $controller->run();
} else {
    $actionListener = null;
    $event = new Event($_GET, $_POST);
    $actionListener = new ShowIndexPageAction();
    $msg = $actionListener->actionPerformed($event);
}
echo $msg;