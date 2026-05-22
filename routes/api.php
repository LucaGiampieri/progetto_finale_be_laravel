<?php

use App\Http\Controllers\Api\MonsterController;
use App\Http\Controllers\Api\MonsterSizeController;
use App\Http\Controllers\Api\MonsterTypeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('monsters', [MonsterController::class, 'index']);

Route::get('monsters/{monster}', [MonsterController::class, 'show']);

Route::get('/types', [MonsterTypeController::class, 'index']);

Route::get('/sizes', [MonsterSizeController::class, 'index']);
