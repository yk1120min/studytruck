<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PublicRecordController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\LogoutController;



//Route::get('/', function () {
//    return view('welcome');
//});

#breezeが用意したダッシュボード機能
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

#breezeが用意したプロフフィール機能
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});


Route::redirect('/', '/dashboard');

Route::get('/dashboard',[DashboardController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');


//Route::post('/dashboard', [DashboardController::class, 'search'])
//    ->middleware('auth')
//    ->name('dashboard.search');

Route::get('/records/create', [RecordController::class, 'create'])
    ->middleware('auth')
    ->name('records.create');

Route::post('/records', [RecordController::class, 'store'])
    ->middleware('auth')
    ->name('records.store');

Route::get('/records/{id}/edit', [RecordController::class, 'edit'])
    ->middleware('auth')
    ->name('records.edit');

Route::put('/records/{id}', [RecordController::class, 'update'])
    ->middleware('auth')
    ->name('records.update');

Route::get('users/{public_id}/records', [PublicRecordController::class, 'index'])
    ->middleware('auth')
    ->name('users.records.index');

//Route::get('profile', [ProfileController::class, 'show'])
//    ->middleware('auth')
//    ->name('profile.show');

Route::get('/profile/edit', [ProfileController::class, 'edit' ])
    ->middleware('auth')
    ->name('profile.edit');

Route::put('/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');

Route::get('logout/confirm', [LogoutController::class, 'confirm'])
    ->middleware('auth')
    ->name('logout.confirm');

require __DIR__.'/auth.php';
