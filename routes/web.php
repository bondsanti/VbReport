<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\MainController;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\MorgagedController;
Use App\Http\Controllers\YeartargetController;
Use App\Http\Controllers\BankController;
Use App\Http\Controllers\ReportController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[MainController::class,'index'])->name('main');
Route::prefix('/report')->group(function () {
    Route::get('/',[UserController::class,'index'])->name('users');
    Route::get('/mortgaged',[MorgagedController::class,'index'])->name('mortgaged');
    Route::post('/mortgaged/search',[MorgagedController::class,'search'])->name('mortgaged.search');

    Route::get('/yeartarget',[YeartargetController::class,'index'])->name('yeartarget');
    Route::post('yeartarget/search',[YeartargetController::class,'search'])->name('yeartarget.search');
    Route::get('/bank',[BankController::class,'index'])->name('banking');
    Route::post('/bank/search',[BankController::class,'search'])->name('bank.search');

    Route::get('/jobteam',[ReportController::class,'index'])->name('jobteam');
    Route::post('/jobteam/search',[ReportController::class,'search'])->name('jobteam.search');

    Route::get('/rejected',[ReportController::class,'rejected'])->name('rejected');
    Route::post('/rejected/search',[ReportController::class,'rejected_search'])->name('rejected.search');

    Route::get('/jobstatus',[ReportController::class,'jobstatus'])->name('jobstatus');
    Route::post('/jobstatus/search',[ReportController::class,'status_search'])->name('jobstatus.search');

    Route::get('/team',[ReportController::class,'report'])->name('report');
    Route::post('/team/search',[ReportController::class,'report_search'])->name('report.search');

    Route::get('/saleinout',[ReportController::class,'inout'])->name('saleinout');
    Route::post('/saleinout/search',[ReportController::class,'inout_search'])->name('saleinout.search');



});
