<?php

use App\Http\Livewire\AddCaseComponent;
use App\Http\Livewire\AramlComponent;
use App\Http\Livewire\AytamComponent;
use App\Http\Livewire\CasesComponent;
use App\Http\Livewire\DeforsedComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\EditCaseComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\SearchComponent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',HomeComponent::class)->name('home.index');

Route::get('/cases',CasesComponent::class)->name('cases');
Route::get('/aytam',AytamComponent::class)->name('aytam');
Route::get('/araml',AramlComponent::class)->name('araml');
Route::get('/deforsed',DeforsedComponent::class)->name('deforsed');
Route::get('/search',SearchComponent::class)->name('case.search');
Route::get('/case/add',AddCaseComponent::class)->name('case.add');
Route::get('/case/{case_id}',DetailsComponent::class)->name('case.details');
Route::get('/case/edit/{case_id}',EditCaseComponent::class)->name('case.edit');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
