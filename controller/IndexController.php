<?php

require_once 'Controller.php';

class IndexController extends Controller
{

    public function run()
    {
        $controller = null;
        $action = $this->getAction();
        require_once "actions/$action.php";
        $event = new Event($_GET, $_POST);
        $actionListener = new $action();
        return $actionListener->actionPerformed($event);
    }

}
