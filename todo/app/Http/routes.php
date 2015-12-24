<?php
Route::get('/',[
    'middleware' => 'auth',
    'as'=>'index',
    'uses'=>'taskController@index']);
Route::get('/Delete/{id}',
    ['middleware' => 'auth',
    'as'=>"delete",
    'uses'=>'taskController@delete']);
Route::get('/AjoutTache',[
    'middleware' => 'auth',
    'as'=>'erreur',
    'uses'=>'AddTaskController@erreur']);
Route::get('/AjoutTache/{id}',[
    'middleware' => 'auth',
    'as'=>'/AjouterTache',
    'uses'=>'AddTaskController@index']);
Route::get('/update/{id}',[
    'middleware' => 'auth',
    'as'=>'viewEdit',
    'uses'=>'taskController@viewEdit']);
Route::post('/edit/{id}',[
    'middleware' => 'auth',
    'as'=>'edit',
    'uses'=>'taskController@edit']);
Route::post('/AddNewTask/{id}',[
    'middleware' => 'auth',
    'as'=>'createTaches',
    'uses'=>'AddTaskController@createTaches']);
Route::get('/NewTask/{id}',[
    'middleware' => 'auth',
    'as'=>'AddSousTaches',
    'uses'=>'AddTaskController@AddSousTaches']);
Route::get('/NewTask',[
    'middleware' => 'auth',
    'as'=>'erreur',
    'uses'=>'AddTaskController@erreur']);
/*Route::get('/login', function () {return view('login');});*/
Route::get('/list',[
    'middleware' => 'auth',
    'as'=>'index',
    'uses'=>'listeController@index']);
Route::post('/task', [
    'middleware' => 'auth',
    'as'=>'postTask',
    'uses'=>'taskController@postTask']);
Route::get('/about', function () {return view('about');});
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

/*Route::controllers([
    'password' => 'Auth\PasswordController',
]);*/
