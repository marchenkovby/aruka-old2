<?php

/**
 * Файл с маршрутами
 */

use Aruka\Routing\Route;

/**
 * Стандартные маршруты
 */
Route::get('', 'MainController@index');
Route::get('chat', 'MainController@chat');
Route::get('about', 'MainController@about');
Route::get('articles/{id}', 'ArticlesController@show');
Route::get('articles', 'ArticlesController@index');
Route::post('articles', 'ArticlesController@create');
Route::get('articles/{id}/edit', 'ArticlesController@edit');
Route::get('articles/{id}/update', 'ArticlesController@update');
Route::get('articles/{id}/delete', 'ArticlesController@delete');

/**
 * Маршруты для RESTful API
 */
// Получить статью
Route::get('api/{version}/articles/{id}', 'ArticlesController@api');

// Получить все статьи
Route::get('api/{version}/articles', 'ArticlesController@api');

// Создать статью
Route::post('api/{version}/articles', 'ArticlesController@api');

// Удалить статью
Route::delete('api/{version}/articles/{id}', 'ArticlesController@api');

// Обновить статью
Route::put('api/{version}/articles/{id}', 'ArticlesController@api');

// Обновить часть статьи
Route::patch('api/{version}/articles/{id}', 'ArticlesController@api');
