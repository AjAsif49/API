<?php

Route::ApiResource('/class','Api\SclassController');
Route::ApiResource('/subject','Api\SubjectController');
Route::ApiResource('/section','Api\SectionController');
Route::ApiResource('/student','Api\StudentController');



Route::group([

    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});