<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TeamSelectionController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\MatchesController;
use App\Http\Controllers\Admin\DashboardController;
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

//teams.staff-member
Route::get('/staff-member', [TeamSelectionController::class, 'staffMember'])->name('staff-member');

//teams.staff-page
Route::get('/management-and-staff', [TeamSelectionController::class, 'staffPage'])->name('staff-page');

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


Route::get('/news', [MatchesController::class, 'news'])->name('news');
Route::get('/shop', [MatchesController::class, 'shop'])->name('shop');
Route::get('/news', [MatchesController::class, 'news'])->name('news');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


