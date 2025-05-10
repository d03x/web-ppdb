<?php

use Illuminate\Support\Facades\Route;
use Modules\Ppdb\Http\Controllers\PpdbController;


Route::get('pendaftaran', [\Modules\Ppdb\Http\Controllers\PendftaranController::class, 'index'])->name('ppdb.pendaftaran');