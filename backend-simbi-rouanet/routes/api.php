<?php

use App\Application\Support\Helper;
use App\Domain\Project\ProjectRouanet\Controllers\ProjectRouanetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::prefix('/')->group(function () {

    Route::prefix('/')
        ->group(Helper::getGroupRoute('Project/projectRouanet.php'));
});
