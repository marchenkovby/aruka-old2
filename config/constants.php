<?php

// Режим разработки, true - включен, false - выключен
define('DEBUG', true);

// Директория с файлами фреймворка
define('ROOT_PATH', dirname(__DIR__));

// Директория с файлами приложения
define('APP_PATH', ROOT_PATH . '/app');

// Директория с файлами ядра приложения
define('FRAMEWORK_PATH', ROOT_PATH . '/framework');

// Директория с файлами конфигурации приложения
define('CONFIG_PATH', ROOT_PATH . '/config');

// Директория с логами
define('LOGS_PATH', ROOT_PATH . '/logs');

// Директория с файлами для теста
define('TESTS_PATH', ROOT_PATH . '/tests');

// Директория с контроллерами
define('CONTROLLERS_PATH', APP_PATH . '/Controllers');

// Директория с моделями
define('MODELS_PATH', APP_PATH . '/Models');

// Директория с представлениями
define('VIEWS_PATH', APP_PATH . '/Views');

// Директория с шаблонами
define('LAYOUTS_PATH', VIEWS_PATH . '/layouts');
