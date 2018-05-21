<?php

require_once 'include/IndexView.php';
require_once 'models/IndexModel.php';

class ShowIndexPageAction implements ActionListener
{
    private $view = null;
    private $model = null;

    public function __construct()
    {
        $this->view = new IndexView();
        $this->model = new IndexModel();
    }

    public function actionPerformed($event)
    {
        return $this->view->showIndexPage();
    }
}

?>
