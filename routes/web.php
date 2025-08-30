<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    echo "Teste view";
});


Route::get('/sobre', function () {
       echo "Sobre";

});

Route::get('/contato', function () {
        echo "Contato";

});

Route::get('/portifolio', function () {
    echo "Portifolio";

});