<?php

Auth::routes();

Route::get('/logout-manual', function() {
    request()->session()->invalidate();
});

// match the variable any with anything 0 or more times (everything)
Route::get('/{any}', 'AppController@index')->where('any', '.*');
