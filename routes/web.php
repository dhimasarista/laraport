<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=> 'data'], function () {
    Route::get('', action: [DataController::class,'index'])->name('data.index');
    Route::get('/paginate', action: [DataController::class,'paginate'])->name('data.paginate');
});
