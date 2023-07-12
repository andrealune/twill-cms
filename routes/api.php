<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(function ($server) {
        $server->resource('news', LaravelJsonApi\Laravel\Http\Controllers\JsonApiController::class)
            ->relationships(function ($relationships) {
                $relationships->hasMany('blocks');
                $relationships->hasMany('media');
            });
    });

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(function ($server) {
        $server->resource('projects', LaravelJsonApi\Laravel\Http\Controllers\JsonApiController::class)
            ->relationships(function ($relationships) {
                $relationships->hasMany('blocks');
                $relationships->hasMany('media');
            });
    });
JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(function ($server) {
        $server->resource('sectors', LaravelJsonApi\Laravel\Http\Controllers\JsonApiController::class)
            ->relationships(function ($relationships) {
                $relationships->hasMany('blocks');
                $relationships->hasMany('media');
            });
    });

JsonApiRoute::server('v1')
    ->prefix('v1')
    ->resources(function ($server) {
        $server->resource('services', LaravelJsonApi\Laravel\Http\Controllers\JsonApiController::class)
            ->relationships(function ($relationships) {
                $relationships->hasMany('blocks');
                $relationships->hasMany('media');
            });
    });

