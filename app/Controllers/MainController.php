<?php

namespace Aruka\Controllers;

use Aruka\Controller;

class MainController extends Controller
{
    public function index(): void
    {
        $this->view->render([
            'pageTitle' => 'Main page',
        ]);
    }

    public function chat(): void
    {
        $this->view->render([
            'pageTitle' => 'Chat page',
        ]);
    }

    public function about(): void
    {
        $data = [
            'pageTitle' => 'About page',
        ];
        $this->view->render($data, 'about2');
    }
}
