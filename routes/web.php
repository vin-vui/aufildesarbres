<?php

use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

use App\Http\Livewire\Reports;
use App\Http\Livewire\Courses;
use App\Http\Livewire\Hours;
use App\Http\Livewire\Prices;
use App\Http\Livewire\Photos;

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

Route::get('/', function () { return view('web.guest.homepage.index'); })->name('welcome');
Route::get('mentions-legales', function () { return view('web.guest.legal-notice'); })->name('legal-notice');

Route::post('contact', 'App\Http\Controllers\ContactController@contact')->middleware(ProtectAgainstSpam::class)->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->group(function ()
{
    Route::get('dashboard', function () {
        return view('web.admin.dashboard');
    })->name('dashboard');

    Route::get('news', Reports::class)->name('reports');
    Route::get('parcours', Courses::class)->name('courses');
    Route::get('horaires', Hours::class)->name('hours');
    Route::get('tarifs', Prices::class)->name('prices');
    Route::get('photos', Photos::class)->name('photos');
});

