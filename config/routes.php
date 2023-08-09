<?php

/**
 * Файл с маршрутами
 */

use Aruka\Routing\Route;

/**
 * Стандартные маршруты
 */
Route::get('', 'MainController@indexAction');
Route::get('chat', 'MainController@chatAction');
Route::get('about', 'MainController@aboutAction');
Route::get('articles/{id}', 'ArticlesController@showAction');
Route::get('articles', 'ArticlesController@indexAction');
Route::post('articles', 'ArticlesController@createAction');
Route::get('articles/{id}/edit', 'ArticlesController@editAction');
Route::get('articles/{id}/update', 'ArticlesController@updateAction');
Route::get('articles/{id}/delete', 'ArticlesController@deleteAction');

/**
 * Маршруты для RESTful API
 */
// Получить статью
Route::get('api/{version}/articles/{id}', 'ArticlesController@apiAction');

// Получить все статьи
Route::get('api/{version}/articles', 'ArticlesController@apiAction');

// Создать статью
Route::post('api/{version}/articles', 'ArticlesController@apiAction');

// Удалить статью
Route::delete('api/{version}/articles/{id}', 'ArticlesController@apiAction');

// Обновить статью
Route::put('api/{version}/articles/{id}', 'ArticlesController@apiAction');

// Обновить часть статьи
Route::patch('api/{version}/articles/{id}', 'ArticlesController@apiAction');
