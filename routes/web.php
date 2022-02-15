<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AllMemberController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamSelectionController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\MatchesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\HomeController as HmeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\PageController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');

//Teams
Route::get('/team-selection-v1', [TeamSelectionController::class, 'ts1'])->name('ts1');
Route::get('/team-selection-v2', [TeamSelectionController::class, 'ts2'])->name('ts2');
Route::get('/team-selection-v3', [TeamSelectionController::class, 'ts3'])->name('ts3');
Route::get('/team-selection-v4', [TeamSelectionController::class, 'ts4'])->name('ts4');

//Team Overview
Route::get('/team-overview-1', [TeamSelectionController::class, 'to1'])->name('to1');
Route::get('/team-overview-2', [TeamSelectionController::class, 'to2'])->name('to2');

//teams.player-page
Route::get('/player-page', [TeamSelectionController::class, 'playerPage'])->name('player-page');


//teams.staff-page
Route::get('/management-and-staff', [TeamSelectionController::class, 'staffPage'])->name('staff-page');
Route::get('management-and-staff/{slug}/staff-member', [TeamSelectionController::class, 'staffMember'])->name('staff-member');

//Matches
Route::get('/matches-scores', [MatchesController::class, 'scores'])->name('matches-scores');
Route::get('/matches-upcoming', [MatchesController::class, 'upcomingMatch'])->name('upcoming-match');
Route::get('/matches-standings', [MatchesController::class, 'matchesStanding'])->name('matches-standing');
Route::get('/match-stats-1', [MatchesController::class, 'matchStats1'])->name('match-stats1');
Route::get('/match-stats-2', [MatchesController::class, 'matchStats2'])->name('match-stats2');
Route::get('/match-stats-3', [MatchesController::class, 'matchStats3'])->name('match-stats3');
Route::get('/matches-lineups-1', [MatchesController::class, 'matchesLineups1'])->name('matches-lineups1');
Route::get('/matches-lineups-2', [MatchesController::class, 'matchesLineups2'])->name('matches-lineups2');
Route::get('/matches-lineups-3', [MatchesController::class, 'matchesLineups3'])->name('matches-lineups3');
Route::get('/matches-overview-1', [MatchesController::class, 'matchesOverview1'])->name('matches-overview1');
Route::get('/matches-overview-2', [MatchesController::class, 'matchesOverview2'])->name('matches-overview2');
Route::get('/matches-repaly', [MatchesController::class, 'matchesRepaly'])->name('matches-repaly');


Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PageController::class, 'newsDetail'])->name('news-detail');
Route::get('/shop', [MatchesController::class, 'shop'])->name('shop');
Route::get('/contact', [MatchesController::class, 'contact'])->name('contact');
Route::get('/faqs', [MatchesController::class, 'faqs'])->name('faqs');
Route::get('/about', [MatchesController::class, 'about'])->name('about');

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/main/edit', [MainController::class, 'index'])->name('main.edit');
    Route::post('/main/store', [MainController::class, 'store'])->name('main.store');

    Route::get('/home', [HmeController::class, 'index'])->name('home.index');
    Route::get('/home/create', [HmeController::class, 'create'])->name('home.create');
    Route::post('/home/store', [HmeController::class, 'store'])->name('home.store');
    Route::get('/home/{id}/edit', [HmeController::class, 'edit'])->name('home.edit');
    Route::put('/home/{id}/update', [HmeController::class, 'update'])->name('home.update');
    Route::delete('/home/{id}/delete', [HmeController::class, 'destroy'])->name('home.destroy');

    Route::get('/about', [AboutController::class, 'index'])->name('about.edit');
    Route::post('/about/store', [AboutController::class, 'store'])->name('about.store');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.edit');
    Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

    Route::resource('/faqs', FaqsController::class)->except('show');

    Route::resource('/management-team-members', AllMemberController::class)->except('show');

    Route::resource('/news', NewsController::class)->except('show');

    Route::post('logout', [AboutController::class, 'logout'])->name('logout');

});

