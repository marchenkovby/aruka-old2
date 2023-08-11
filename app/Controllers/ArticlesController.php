<?php

namespace Aruka\Controllers;

use Aruka\Controller;
use Aruka\View;

class ArticlesController extends Controller
{
    public function index(): View
    {
        return View::make('articles/index');
    }

    public function create(): void
    {
        $this->view->render(
            ['pageTitle' => 'Create page',
            ],
            'create'
        );
    }

    public function show(): void
    {
        $pageId = (int) $this->paramsRoute['id'];
        $arrayArticle = $this->model->getArticleById($pageId);
        $this->view->render([
            'pageTitle' => 'Page with 1 article',
            'pageId' => $pageId,
            'article' => $arrayArticle,
        ]);
    }

    public function edit(): void
    {
        $this->view->render([
            'pageTitle' => 'Edit page with article',
        ]);
    }

    public function update(): void
    {

        $this->view->render([
            'pageTitle' => 'Update page with article',
        ]);
    }

    public function delete(): void
    {
        $this->view->render([
            'pageTitle' => 'Delete page with article',
        ]);
    }

    public function api(): void
    {
        $this->view->render([
            'pageTitle' => 'Page with API',
        ]);
    }
}
