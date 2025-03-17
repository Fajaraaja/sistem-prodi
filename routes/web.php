<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', App\Livewire\Mahasiswa\RKA\Index::class)->name('landing');

