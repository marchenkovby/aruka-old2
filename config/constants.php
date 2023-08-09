<?php

// Режим разработки, true - включен, false - выключен
define('DEBUG', true);

// Директория с файлами фреймворка
define('ROOT', dirname(__DIR__));

// Директория с файлами приложения
define('APP', ROOT . '/app');

// Директория с файлами ядра приложения
define('FRAMEWORK', ROOT . '/framework');

// Директория с файлами конфигурации приложения
define('CONFIG', ROOT . '/config');

// Директория с логами
define('LOGS', ROOT . '/logs');

// Директория с файлами для теста
define('TESTS', ROOT . '/tests');

// Директория с контроллерами
define('CONTROLLERS', APP . '/Controllers');

// Директория с моделями
define('MODELS', APP . '/Models');

// Директория с представлениями
define('VIEWS', APP . '/Views');

// Директория с шаблонами
define('LAYOUTS', VIEWS . '/layouts');
