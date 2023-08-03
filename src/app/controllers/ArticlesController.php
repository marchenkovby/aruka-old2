<?php

namespace Aruka\App\Controllers;

use Aruka\core\Controller;

class ArticlesController extends Controller
{
    public function indexAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Page with all articles',
        ]);
    }

    public function createAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Create page',
        ]);
    }

    public function showAction(): void
    {
        $pageId = (int) $this->paramsRoute['id'];
        $arrayArticle = $this->model->getArticleById($pageId);
        $this->view->render([
            'pageTitle' => 'Page with 1 article',
            'pageId' => $pageId,
            'article' => $arrayArticle,
        ]);
    }

    public function editAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Edit page with article',
        ]);
    }

    public function updateAction(): void
    {

        $this->view->render([
            'pageTitle' => 'Update page with article',
        ]);
    }

    public function deleteAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Delete page with article',
        ]);
    }

    public function apiAction(): void
    {
        $this->view->render([
            'pageTitle' => 'Page with API',
        ]);
    }
}
