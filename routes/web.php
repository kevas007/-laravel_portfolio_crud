<?php

use App\Models\About;
use App\Models\Contact;
use App\Models\Facts;
use App\Models\Portfolio;
use App\Models\PortfolioStatique;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $abouts= About::all();
    $contacts = Contact::all();
    $facts= Facts::all();
    $portfolios = Portfolio::all();
    $portfolioStats = PortfolioStatique::all();
    $services =Service::all();
    $skills = Skill::all();
    return view('welcome', compact('abouts', 'contacts', 'facts', 'portfolios','portfolioStats', 'services', 'skills'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
