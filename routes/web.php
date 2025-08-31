<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});


Route::get('/sobre', function () {
       return view('sobre');

});

Route::get('/contato', function () {
        return view('contato');

});

Route::get('/portifolio', function () {
    return view('portifolio');

});