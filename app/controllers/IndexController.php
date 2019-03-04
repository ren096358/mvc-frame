<?php
namespace App\Controllers;

use App\Controller;

class IndexController extends Controller
{

    public function run()
    {
        try {
            $action = $this->getAction();
            $action = empty($action) ? 'ShowIndexPageAction' : $action;
            $classname = "App\\Actions\\$action";
            $actionListener = new $classname();
            return $actionListener->actionPerformed($this->event);
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }

}
