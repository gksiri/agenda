<?php

use App\Livewire\Client;
use App\Livewire\Counter;
use App\Livewire\Servicio;
use App\Livewire\AddService;
use App\Livewire\AddSession;
use App\Livewire\AddWorkshop;
use App\Livewire\Especialista;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/counter', Counter::class);
Route::get('/client', Client::class);
Route::get('/especialista', Especialista::class);
Route::get('/servicio', Servicio::class);
Route::get('/add-service', AddService::class);
Route::get('/add-session', AddSession::class);
Route::get('/add-workshop', AddWorkshop::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
