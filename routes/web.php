<?php


Route::get('/', 'postcontroll@select');
    

Route::get('/addelan', function () {
    return view('addjob');
});

Route::post('/addelan/post', 'postcontroll@post')->name('addelan.post');

Route::get('/axtar', 'postcontroll@elanaxtar')->name('axtar');

//Route::get('/axtar/{title}/{city}','postcontroll@elanaxtar')->name('elanaxtar');



Route::get('/elan/{id}/{compname}', 'postcontroll@single');

// Route::get('/single/{id}', 'postcontroll@single');

Route::get('/gets','postcontroll@link')->name('link');

