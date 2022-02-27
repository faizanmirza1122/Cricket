<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AllMemberController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\PlayerController;
use App\Http\Controllers\Admin\MatchController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamSelectionController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\MatchesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\HomeController as HmeController;
use App\Http\Controllers\Admin\MatchTypeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PageController;
use App\Models\MatchType;
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/home/{slug}', [HomeController::class, 'homeDetail'])->name('home-detail');

//Teams
Route::get('/team', [TeamSelectionController::class, 'ts2'])->name('ts2');
//Team Overview
Route::get('/team/{slug}/overview', [TeamSelectionController::class, 'to1'])->name('to1');
//teams.player-page
Route::get('/team/{team}/player/{player}', [TeamSelectionController::class, 'playerPage'])->name('player-information');


//teams.staff-page
Route::get('/management-and-staff', [TeamSelectionController::class, 'staffPage'])->name('staff-page');
Route::get('management-and-staff/{slug}/staff-member', [TeamSelectionController::class, 'staffMember'])->name('staff-member');

//Matches
Route::get('/matches-scores', [MatchesController::class, 'scores'])->name('matches-scores');
Route::get('/matches-upcoming', [MatchesController::class, 'upcomingMatch'])->name('upcoming-match');
Route::get('/matches-standings', [MatchesController::class, 'matchesStanding'])->name('matches-standing');
Route::get('/match-stats-1', [MatchesController::class, 'matchStats1'])->name('match-stats1');
Route::get('/matches-lineups-1', [MatchesController::class, 'matchesLineups1'])->name('matches-lineups1');
Route::get('/matches-overview-1', [MatchesController::class, 'matchesOverview1'])->name('matches-overview1');
Route::get('/matches-repaly', [MatchesController::class, 'matchesRepaly'])->name('matches-repaly');


Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PageController::class, 'newsDetail'])->name('news-detail');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
Route::get('/shop/{slug}', [PageController::class, 'shopDetail'])->name('shop-detail');
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

    Route::resource('/shop', ProductController::class)->except('show');

    Route::resource('/team', TeamController::class)->except('show');
    Route::resource('team.players', PlayerController::class)->except('show');

    Route::resource('match-type', MatchTypeController::class)->except('show');

    Route::resource('match', MatchController::class)->except('show');

    Route::post('logout', [AboutController::class, 'logout'])->name('logout');
});
