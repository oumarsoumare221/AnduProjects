<?php

use App\Http\Controllers\CaseStudyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TarifController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//
Route::get('/', [LandingPageController::class, 'index'])->name('landing');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
//
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
//routes product
Route::resource('products', ProductController::class);

//recuperation de Abou_US
Route::get('/about-us', [LandingPageController::class, 'aboutUs']);

//recuperation historique
Route::get('/history', [HistoryController::class, 'index']);
//tous les deux sont memes
Route::get('/historylanding', [LandingPageController::class, 'historys']);

Route::get('/landing', [LandingPageController::class, 'show']);
//cas d'etude
Route::get('/case-studies', [CaseStudyController::class, 'index']);
//route tarifs
Route::resource('tarifs', TarifController::class);
