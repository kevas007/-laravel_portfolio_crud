<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PortfolioStatiqueController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceStaticController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SkillstaticController;
use App\Models\About;
use App\Models\Contact;
use App\Models\Facts;
use App\Models\Portfolio;
use App\Models\PortfolioDetail;
use App\Models\PortfolioDetailStatic;
use App\Models\PortfolioStatique;
use App\Models\Service;
use App\Models\ServiceStatic;
use App\Models\Skill;
use App\Models\Skillstatic;
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
    $facts =Facts::all();
    $portfolios = Portfolio::all();
    $portfolioStats = PortfolioStatique::all();
    $services = Service::all();
    $servicestacs = ServiceStatic::all();
    $skills = Skill::all();
    $skillStact = Skillstatic::all();
    return view('welcome', compact('services', 'facts', 'portfolios', 'portfolioStats','servicestacs', 'skills', 'skillStact', 'abouts', 'contacts'));
});

Route::get('/dashboard/skills', function (){
    $skils= Skill::all();
    $skilles = Skillstatic::all();
    return view('backend.pages.skills', compact('skils', 'skilles'));
});

Route::get('/portfolio-details', function (){
    $details= PortfolioDetail::all();

    return view('frontend.pages.portfolioDetails', compact('details'));
});

Route::get('/dashboard/services', function (){
    $services= Service::all();
    $serviceStacs= ServiceStatic::all();
    return view('backend.pages.service', compact('services','serviceStacs'));
});

Route::get('/dashboard/potfolios', function (){
    $portfolio= Portfolio::all();
    $portfolioStatiques= PortfolioStatique::all();
    return view('backend.pages.portfolio', compact('portfolio','portfolioStatiques'));
});

Route::resource('/dashboard/about', AboutController::class);

Route::resource('/dashboard/facts', FactsController::class);

Route::resource('/dashboard/skillse', SkillController::class);

Route::resource('/dashboard/skil', SkillstaticController::class);

Route::resource('/dashboard/potfolio', PortfolioController::class);


Route::resource('/dashboard/potfolioStac', PortfolioStatiqueController::class);

Route::resource('/dashboard/service', ServiceController::class);


Route::resource('/dashboard/serviceStac', ServiceStaticController::class);

Route::resource('/dashboard/contact', ContactController::class);

Route::resource('/dashboard/portfolioDetails',PortfolioDetail::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
