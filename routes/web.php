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
use App\Livewire\AppointmentComponent;
use App\Livewire\ClientComponent;
use App\Livewire\SpecialistComponent;
use App\Livewire\SpecialtyComponent;


Route::get('/client', ClientComponent::class)->name('specialist.list');;
Route::get('/appointment', AppointmentComponent::class);
Route::get('/specialty', SpecialtyComponent::class)->name('specialty.list');
Route::get('/specialist', SpecialistComponent::class)->name('specialist.list');
Route::get('/specialty/add', SpecialtyComponent::class)->name('specialty.add');




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
