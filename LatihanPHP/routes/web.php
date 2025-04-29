<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('welcome');
});

Route::get('/Home', function(){
    return view('Beranda',
    [
            'name' => 'Obert Sean',
            'email' => 'Obert.sean13@gmail.com',
            'alamat' => 'Palembang'

        ]
    );

});

Route::get('/berita/{id}/{judul?}',function($id,$judul=null){
    return view('berita', ['id'=>$id, 'judul'=>$judul]);
});
