<?php

// Режим разработки, true - включен, false - выключен
define('DEBUG', true);

// Директория с файлами фреймворка
define('ROOT', dirname(__DIR__) . '/..');

// Директория с файлами приложения
define('APP', ROOT . '/src/app');

// Директория с файлами ядра приложения
define('CORE', ROOT . '/src/core');

// Директория с файлами конфигурации приложения
define('CONFIG', ROOT . '/src/config');

// Директория с логами
define('LOGS', ROOT . '/logs');

// Директория с файлами для теста
define('TESTS', ROOT . '/tests');

// Директория с контроллерами
define('CONTROLLERS', APP . '/controllers');

// Директория с моделями
define('MODELS', APP . '/models');

// Директория с представлениями
define('VIEWS', APP . '/views');

// Директория с шаблонами
define('LAYOUTS', VIEWS . '/layouts');
