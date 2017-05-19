<?php

Route::model('produto', 'App\Modules\Generico\Produto\Produto');

Route::as('produto.')->prefix('produtos')->group(
    function () {
        Route::name('options')->options('/', 'ProdutoController@options');
        Route::name('index')->get('/', 'ProdutoController@index');
        Route::name('show')->get('/{produto}', 'ProdutoController@show');
        Route::name('store')->post('/', 'ProdutoController@store');
        Route::name('update')->match(['put', 'patch'], '/{produto}', 'ProdutoController@update');
        Route::name('destroy')->delete('/{produto}', 'ProdutoController@destroy');
    }
);