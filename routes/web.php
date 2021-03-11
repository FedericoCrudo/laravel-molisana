<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home-route');
Route::get('/product', function () {
    $pasta = config('pasta');//per prendere il db dal file psta.php
    $collection=collect($pasta);
    $pasta_lunga=$collection->where('tipo','lunga');
    $pasta_corta=$collection->where('tipo','corta');
    $pasta_cortissima=$collection->where('tipo','cortissima');

    $data=[
        'formati'=>[
           'Le lunghe' =>$pasta_lunga,
           'Le corte'=> $pasta_corta,
            'Le cortissime'=>$pasta_cortissima,

        ]
        
    ];
     
    return view('product',$data);
})->name('product-route');
Route::get('/news', function () {
    return view('news');
})->name('news-route');
Route::get('/prodotto/{id}', function ($id) {
    $pasta = config('pasta');
    $data=['prodotto'=>$pasta[$id]];

    return view('dettagli',$data);
})->name('dettagli-prodotto');

