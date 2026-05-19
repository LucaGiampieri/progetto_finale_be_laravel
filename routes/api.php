<?php

use App\Http\Controllers\Api\MonsterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('monsters', [MonsterController::class, 'index']);

Route::get('monsters/{monster}', [MonsterController::class, 'show']);
