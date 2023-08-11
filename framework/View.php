<?php

declare(strict_types=1);

namespace Aruka;

use Aruka\Exceptions\ViewNotFoundException;

class View
{
    public string $path = '';
    public string $layout = 'default';

    protected string $view;
    protected array $params = [];

    public function __construct(array $paramsRoute)
    {
        $folderController = lcfirst(str_replace('Controller', '', $paramsRoute['controller']));
        $folderAction = lcfirst(str_replace('Action', '', $paramsRoute['action']));
        $this->path = "{$folderController}/{$folderAction}";
    }

    public static function make(string $view, array $params = []): static
    {
        return new static($view, $params);
    }

    public function render(): void
    {
        // $viewFile = VIEWS_PATH . "/{$this->path}.php";
        $viewFile = VIEWS_PATH . DIRECTORY_SEPARATOR . $view . '.php';

        if (!file_exists($viewFile)) {
            throw new ViewNotFoundException();
        }

        extract($data);
        ob_start();
        require_once $viewFile;
        $content = ob_get_clean();
        require_once LAYOUTS_PATH . "/{$this->layout}.php";
    }

    public function renderApi($data): void
    {
        // Преобразует данные в формат JSON
        $json = json_encode($data);

        // Устанавливает заголовок для указания типа контента
        header('Content-Type: application/json');

        // Выводит JSON на экран
        echo $json;
    }
    
}
