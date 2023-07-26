<?php

namespace Aruka\App\Controllers;

use Aruka\Core\Controller;

class MainController extends Controller
{
    public function indexAction(): void
    {
        $this->view->renderPage([
            'pageTitle' => 'Main page',
        ]);
    }

    public function chatAction(): void
    {
        $this->view->renderPage([
            'pageTitle' => 'Chat page',
        ]);
    }

    public function aboutAction(): void
    {
        $this->view->renderPage([
            'pageTitle' => 'About page',
        ]);
    }
}
