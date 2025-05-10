<?php

use Illuminate\Support\Facades\Route;
use Modules\Ppdb\Http\Controllers\PpdbController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('ppdbs', PpdbController::class)->names('ppdb');
});
