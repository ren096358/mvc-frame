<?php
namespace App;

use App\Event;

abstract class Controller
{
    protected $event = null;

    public function __construct()
    {
        $this->event = new Event($_GET, $_POST);
    }

    public function getAction()
    {
        return $this->event->get('action');
    }

    abstract public function run();
}
