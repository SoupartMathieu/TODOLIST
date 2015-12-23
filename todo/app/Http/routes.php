<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//les routes servent a rediriger vers un endroit voulu



Route::get('/','taskController@index');
Route::get('/Delete/{id}','taskController@delete');
Route::get('/AjoutTache','AddTaskController@erreur');
Route::get('/AjoutTache/{id}',[
'as'=>'/AjouterTache',
'uses'=>'AddTaskController@index'
]);

Route::get('/login', function () {
    return view('login');
});

Route::get('/list','listeController@index');

Route::post('/task', [
    'as'=>'postTask',
    'uses'=>'taskController@postTask'
]);
//Route::controller('users', 'taskController');
//Route::post('users', 'taskController');

