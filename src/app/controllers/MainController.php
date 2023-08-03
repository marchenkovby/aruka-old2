<?php

namespace Aruka\App\Controllers;

use Aruka\core\Controller;

class MainController extends Controller
{
    public function indexAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Main page',
        ]);
    }

    public function chatAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Chat page',
        ]);
    }

    public function aboutAction(): void
    {
        $data = [
            'pageTitle' => 'About page',
        ];
        $this->view->render($data, 'about2');
    }
}
