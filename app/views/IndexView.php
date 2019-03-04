<?php
namespace App\Views;

use App\View;

class IndexView extends View
{

    public function __construct()
    {
        parent::__construct();
    }

    public function showIndexPage()
    {
        //$this->tpl->assign("data", $data);
        return $this->tpl->fetch('IndexPage.tpl');
    }

}
