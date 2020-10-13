<?php

Route::any('products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');


Route::get('/login', function (){
    return 'login';
})->name('login');

Route::middleware([])->group(function (){

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', function (){
            return 'Home Admin';
        })->name('admin.dashboarad');
    
        Route::get('/financeiro', function (){
            return 'Financeiro Admin';
        })->name('admin.financeiro');
    
        Route::get('/produtos', function (){
            return 'Produtos Admin';
        })->name('admin.produtos');
    
        Route::namespace('Admin')->group(function () {

            Route::get('/', 'TesteController@teste')->name('admin.home');

        }); 
    });
});

Route::get('/redirect3', function (){
    return redirect()->route('url.name');
});

Route::get('/nome-url', function(){
    return 'hey hey';
})->name('url.name');

Route::get('/redirect1', function (){
    return redirect('/redirect2');
});

Route::get('/redirect2', function(){
    return redirect()->route('admin.home');
});

Route::get('/produtos/{idProduct?}', function ($idProduct = 'dfsddf'){
    return "Produtos {$idProduct}";
});


Route::get('/categoria/{flag}/posts', function($flag) {
    return "Posts da categoria: {$flag}";
});

Route::get('/categorias/{flag}', function($flag) {
    return "produtos da categoria: {$flag}";
});

Route::match(['post','get'], 'match', function (){
    return 'match';
});

Route::any('/any', function (){
    return 'any';
});

Route::post('/register', function(){
    return 'register';
});

Route::get('/empresa', function () {
    return view('site.contato');
});

Route::get('/contato', function(){
    return 'contato da empresa';
});


Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'middleware' => [''],
    'prefix' => 'teste',
    'namespace' => 'Admin',
    'name' => 'teste.'
], function(){
    Route::get('/dashboard', function (){
        return 'Home Admin teste';
    })->name('dashboarad');

    Route::get('/financeiro', function (){
        return 'Financeiro Admin teste';
    })->name('financeiro');

    Route::get('/produtos', function (){
        return 'Produtos Admin teste';
    })->name('produtos');
});

