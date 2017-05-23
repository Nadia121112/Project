<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function(){

    Route::get('/home', 'HomeController@index');
    Route::get('/profile', 'PenggunasController@index');
    Route::get('/profile/{profile}/edit', 'PenggunasController@edit');
    Route::patch('/profile/{profile}', 'PenggunasController@update');

     //subject
     Route::group(['middleware' =>  ['auth', 'admin']], function(){


    Route::get('/registersubj', 'SubjectsController@index');
    Route::get('/registersubj/create', 'SubjectsController@create');
    Route::post('/registersubj', 'SubjectsController@store');
    Route::get('/registersubj/{registersubj}', 'SubjectsController@show');
    Route::get('/registersubj/{registersubj}/edit', 'SubjectsController@edit');
    Route::patch('/registersubj/{registersubj}', 'SubjectsController@update');
    Route::delete('/registersubj/{registersubj}/delete', 'SubjectsController@destroy');


 });

   Route::group(['middleware' =>  ['auth', 'pensyarah']], function(){

     //attendance
   Route::get('/attendance', 'AttendancesController@index');
   Route::get('/attendance/{id}', 'AttendancesController@create');
   Route::get('/attendance/{id}/show', 'AttendancesController@show');
   Route::post('/attendance/{id}', 'AttendancesController@store');
   Route::patch('/attendance/{attendance}', 'AttendancesController@update');
   Route::delete('/attendance/{attendance}/delete', 'AttendancesController@destroy');
   Route::get('/listsubjek', 'DaftarsubjeksController@listsubjek');
   Route::get('/daftarsubjek/{codesubject}/listpelajar', 'DaftarsubjeksController@listpelajar')->name('daftarsubjek.listpelajar');
   Route::get('/report/{id}', 'DaftarsubjeksController@create');
   Route::get('/pdf/resit/{id}', 'DaftarsubjeksController@showReceiptPDF');


  // });
  //
  // Route::group(['middleware' =>  ['auth', 'pelajar']], function(){

  // student register subject
  Route::get('/senaraisubjek', 'SubjectsController@senaraisubjek');
  Route::get('/daftarsubjek', 'DaftarsubjeksController@index');
  Route::post('/registerclass', 'DaftarsubjeksController@store');


  Route::delete('/deletesubjek', 'DaftarsubjeksController@destroy');



});

});

Auth::routes();


Route::get('home', 'HomeController@index');
