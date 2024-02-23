<?php
use App\Http\Controllers\Backend\Contributor\ContributorController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [ContributorController::class, 'index'])->name('dashboard');
