<?php
namespace App;

class Event
{

    private $get = null;
    private $post = null;

    public function __construct($get, $post)
    {
        $this->get = $get;
        $this->post = $post;
    }

    public function get($key, $default = "")
    {
        if (isset($this->get[$key])) {
            return $this->get[$key];
        } else {
            return $default;
        }
    }

    public function post($key, $default = "")
    {
        if (isset($this->post[$key])) {
            return $this->post[$key];
        } else {
            return $default;
        }
    }
}
