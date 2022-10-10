<?php

use Illuminate\Support\Facades\Route;

Route::prefix('branch')->middleware('auth')->name('branch.')->group(function (){
    Route::get('co',App\Http\Livewire\Branch\Co\Index::class)->name('co.index');
    Route::get('co/form/{id?}',App\Http\Livewire\Branch\Co\Form::class)->name('co.form');
    Route::get('co/zone/{id}',App\Http\Livewire\Branch\Co\Zone::class)->name('co.zone');
});
