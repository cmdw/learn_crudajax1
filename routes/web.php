<?php

Route::get('/', function () {
    return view('welcome');
});

Route::resource('books', 'BooksController');
