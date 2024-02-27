<?php

namespace App;

use Illuminate\Support\Facades\Route;
use App\Services\Website\IndexPageService;
use App\Http\Controllers\Website\WebsiteController;


// =====================================================================
// =====================Website Public Routes==========================
// =====================================================================
Route::controller(WebsiteController::class)->name('website.')->group(function () {
    // Public Page Route List
    Route::get('/', 'index')->name('home');
});
