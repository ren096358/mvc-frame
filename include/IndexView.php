<?php

require_once 'View.php';

class IndexView extends View
{

    function __construct()
    {
        parent::__construct();
    }

    public function showIndexPage()
    {
        //$this->tpl->assign("data", $data);
        return $this->tpl->fetch('IndexPage.tpl');
    }

}
