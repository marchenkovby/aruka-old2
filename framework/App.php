<?php

declare(strict_types=1);

namespace Aruka;

use Aruka\Routing\Router;

class App
{
    public function __construct()
    {
        $this->init();
    }

    // Инициализирует приложение
    private function init(): void
    {
        // Подключает файл конфигурации
        $fileBootstrap = dirname(__DIR__) . '/framework/bootstrap.php';
        if (file_exists($fileBootstrap)) {
            require_once $fileBootstrap;
        }

        // Cоздает объект для собственной обработки ошибок
        // new ErrorHandler();

        // Подключает файл с различными ошибками
        //require_once TESTS . '/errors.php';

        // Создает объект маршрутизатора
        new Router();
    }
}
