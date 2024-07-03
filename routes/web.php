<?php

use App\Livewire\AddCar;
use App\Livewire\CarList;
use App\Livewire\EditCar;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', CarList::class)->name('CarsList');
Route::get('/cars/add', AddCar::class)->name('AddCar');
Route::get('/cars/{id}/edit', EditCar::class)->name('EditCar');