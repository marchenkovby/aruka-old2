<?php

/**
 * Класс для работы с маршутом из файла routes.php
 */

declare(strict_types=1);

namespace Aruka\Routing;

class Route
{
    /**
     * Список зарегистриованных маршрутов
     */
    private static array $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'PATCH' => [],
        'DELETE' => [],
    ];

    /**
     * Метод возвращает список зарегистрированных маршрутов
     */
    public static function getRoutes(): array
    {
        return self::$routes;
    }

    /**
     * Метод регистрирует маршрут с HTTP-методам GET
     */
    public static function get(string $route, string $controller): void
    {
        self::addRoute('GET', $route, $controller);
    }

    /**
     * Метод регистрирует маршрут с HTTP-методам POST
     */
    public static function post(string $route, string $controller): void
    {
        self::addRoute('POST', $route, $controller);
    }

    /**
     * Метод регистрирует маршрут с HTTP-методам PUT
     */
    public static function put(string $route, string $controller): void
    {
        self::addRoute('PUT', $route, $controller);
    }

    /**
     * Метод регистрирует маршрут с HTTP-методам PATCH
     */
    public static function patch(string $route, string $controller): void
    {
        self::addRoute('PATCH', $route, $controller);
    }

    /**
     * Метод регистрирует маршрут с HTTP-методам DELETE
     */
    public static function delete(string $route, string $controller): void
    {
        self::addRoute('DELETE', $route, $controller);
    }

    /**
     * Метод обрабатывает маршрут и добавляет его в список зарегистрированных маршутов
     */
    private static function addRoute(string $method, string $route, string $controller): void
    {
        $route = self::replaceRouteRegex($route);
        self::$routes[$method][$route] = $controller;
    }

    /**
     * Метод заменяет маршрут на регулярное выражение
     */
    private static function replaceRouteRegex(string $route): string
    {
        // Шаблоны для замены части маршрута на регулярное выражение
        $patterns = [
            '/\//' => '\/',
            #'/\{(id)\}/' => '(?P<\1>[0-9-]+)',
            #'/\{(slug)\}/' => '(?P<\1>[a-zA-Z-]+)',
            '/\{([a-zA-Z0-9-]+)\}/' => '(?P<\1>[a-zA-Z0-9-]+)',
        ];

        // Заменяет часть маршрута на регулярное выражение,
        // если есть совпадение с шаблоном $patterns
        foreach ($patterns as $pattern => $regex) {
            if (preg_match($pattern, $route)) {
                $route = preg_replace($pattern, $regex, $route);
            }
        }

        // Возвращает маршрут с добавлением символов регулярного выражения
        // начала /^ и конца $/ строки совпадения (для точного совпадения)
        return '/^' . $route . '$/';
    }
}
