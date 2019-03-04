<?php
namespace App\Actions;

use App\ActionListener;
use App\Models\IndexModel;
use App\Views\IndexView;

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
