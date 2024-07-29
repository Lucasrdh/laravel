<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/product',function () {
    return 'Liste des produits';
});

route::get('/product/{id}',function($id) {
    return"Fiche du produit $id";
});

route::get('/cart',function (){
    return "Panier";
});

