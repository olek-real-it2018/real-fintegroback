<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $name = 'Olek';
    return view('welcome', [
        'name'=>$name
    ]);
});


//Auth::routes();

//Route::get('fintegropage', 'FintController@index')->name('fintegropage');
Route::get('index', 'Task3Controller@index');
Route::post('task3in', 'Task3Controller@getData')->name('task3in');
Route::match(['get', 'post'], 'task3out', ['uses' =>'Task3Controller@getInfoUser']);

//Route::match(['get','post'], 'inpage', 'InUserController@taskHandler')->name('dataform');


// Route::match(['get','post'], 'showMessageDB', 'InUserController@takeMessage');
// Route::match(['get','post'],'inpage', 'InUserController@showMessage');

 Route::match(['get','post'],'inpage', 'InUserController@takeMessage');
// // //Route::post('test', 'InUserController@inputName')->name('dataform');
// Route::match(['get','post'], 'insert', 'InUserController@insertMessage');



 //  Route::post('/task', function (Request $request) {
 //    //
 //  });

 //  /**
 //   * Удалить задачу
 //   */
 //  Route::delete('/task/{task}', function (Task $task) {}


 //Вывод формы на вьюху
Route::get('logins', 'IndexloginController@userloginer');
Route::match(['get','post'],'testForm', ['uses'=>'IndexloginController@showNamePass','as'=>'testForm']);

Route::post('/registration', 'Task3Controller@registration')->name('regist');