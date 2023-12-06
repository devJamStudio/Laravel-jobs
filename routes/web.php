<?php

use App\Models\Dogs;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogsController;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// All Listings
Route::get('/', [ListingController::class, 'index']);

Route::get('/listings/create',[ListingController::class, 'create']);

// Store listing data
Route::post('/listings',[ListingController::class, 'store']);


// Single listing

Route::get('/listings/{listing}',[ListingController::class, 'show']);

//All dogs
Route::get('/dogs',[DogsController::class,'index']);

