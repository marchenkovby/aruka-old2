<?php

declare(strict_types=1);

namespace Aruka\Routing;

use Exception;

class Router
{
    // Параметры для зарегистрированного маршрута
    public array $params = [];

    public function __construct()
    {
        $this->dispatch();
    }

    // Ищет совпадения между URI, полученным от пользователя,
    // и существующим зарегистрированным маршутом
    private function isMatchedUri(string $uri, string $method): bool
    {
        $routes = Route::getRoutes();

        $this->params['method'] = $method;

        // Проверяет существует ли HTTP-метод, полученный от пользователя
        // в зарегстрированных маршрутах
        if (!array_key_exists($method, $routes)) {
            return false;
        }

        // Ищет совпадения между URI и HTTP-методом, полученным от пользователя, и
        // зарегистрированным маршрутам. Если совпадение найдено, то вызывает
        // контроллер с нужным экшином
        foreach ($routes[$method] as $route => $controller) {
            if (preg_match($route, $uri, $matches)) {
                list($this->params['controller'], $this->params['action']) = explode('@', $controller);

                // Получает значение именновых групп с захватом (касается регулярных выражений)
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $this->params[$key] = $match;
                    }
                }

                return true;
            }
        }
        return false;
    }

    // Диспетчер вызывает нужный контроллер и экшин
    private function dispatch(): void
    {
        $uri = trim($_SERVER['REQUEST_URI'], '/');
        $method = $_SERVER['REQUEST_METHOD'];
        if ($this->isMatchedUri($uri, $method)) {
            $this->callAction($this->params['controller'], $this->params['action']);
            return;
        }
        throw new Exception("No route defined for URI: {$uri}, method: {$method}");
    }

    // Вызывает экшин контроллера
    private function callAction($controller, $action): void
    {
        $controller = 'Aruka\\Controllers\\' . $controller;
        if (class_exists($controller)) {
            $controller = new $controller($this->params);
            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                throw new Exception("Action {$action} not found");
            }
        } else {
            throw new Exception("Controller {$controller} not found");
        }
    }
}
