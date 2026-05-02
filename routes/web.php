<?php

declare(strict_types=1);

use App\Http\Controllers\DocsController;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): Factory|View {
    return view('welcome');
});

Route::get('/docs', DocsController::class);
