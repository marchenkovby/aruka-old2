<?php

namespace Aruka;

use Aruka\Models\Articles;

abstract class Controller
{
    public array $paramsRoute = [];

    public function __construct($paramsRoute)
    {
        $this->paramsRoute = $paramsRoute;
        $this->view = new View($paramsRoute);
        $this->model = new Articles();
    }
}
