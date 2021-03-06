<?php

Route::model('produto', 'App\Modules\Generico\Produto\Model');

Route::as('api.')->prefix('api')->group(
	function() {
		Route::as('produto.')->prefix('produtos')->group(
			function() {
				Route::name('list')->get('/', 'Controller@list');
				Route::name('store')->post('/', 'Controller@store');
				Route::name('update')->match(['put', 'patch'], '/{produto}', 'Controller@update');
				Route::name('destroy')->delete('/{produto}', 'Controller@destroy');
			}
		);
	}
);

Route::as('produto.')->prefix('produtos')->group(
    function () {
        Route::name('index')->get('/', 'Controller@index');
        Route::name('create')->get('/novo', 'Controller@create');        
        Route::name('edit')->get('/{produto}/editar', 'Controller@edit');        
    }
);
