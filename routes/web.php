<?php

use Illuminate\Support\Facades\Route;

//Route::view('/', 'home,);

//Route::get('contoh', function (){$name = "Angger";return view('contoh', ['name' => $name]);});

//Memanggil CSS dengan Asset
//Route::get('/', fn () => 'home');

// PORT FOLIO //
//Route::get('portfolio/home', function () {$name = "Angger Cakra";return view('posts/home', ['name' => $name]);});

//Route::view('portfolio/contact', 'portfolio.contact');

//Route::view('portfolio/contoh', 'portfolio.contoh');

Route::get('/', function(){
    $name = "Angger cakra";
    return view('home', [
    'name' => $name
 ]);
});


Route::view('contact', 'contact');

Route::view('posts/show', 'posts.show');

Route::view('about', 'about');

Route::view('profile', 'profile');
