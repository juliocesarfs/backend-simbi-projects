<?php

use App\Domain\Project\ProjectRouanet\Controllers\ProjectRouanetController;
use Illuminate\Support\Facades\Route;

Route::get('/project/rouanet', [ProjectRouanetController::class, 'list']);
