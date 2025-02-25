<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
});

Route::get('/sobre-nos', function () {   
});

Route::get('/contato', function () {
    echo 'contato';
});

Route::get('/login', function () {
    echo 'login';
});

Route::get('/clientes', function () {
    echo 'clientes';
});

Route::get('/fornecedores', function () {
    echo 'fornecedores';
});

Route::get('/produtos', function () {
    echo 'produtos';
});
