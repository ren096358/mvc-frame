<?php
namespace App;

use Smarty;

abstract class View
{

    protected $tpl = null;

    public function __construct()
    {
        $this->init();
    }

    public function init()
    {
        $this->tpl = new Smarty();
        $this->tpl->setTemplateDir('./views/');
        $this->tpl->setCompileDir('./smarty/templates_c/');
        $this->tpl->left_delimiter = '{{';
        $this->tpl->right_delimiter = '}}';
    }

}
