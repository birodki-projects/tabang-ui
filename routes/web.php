<?php

use App\Livewire\Data\Show1BarChart1;
use App\Livewire\Data\Show1HorizontalBarChart1;
use App\Livewire\Data\Show1LineChart1;
use App\Livewire\HomePage1;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage1::class);
Route::get('/data/show-1/line-chart-1', Show1LineChart1::class);
Route::get('/data/show-1/bar-chart-1', Show1BarChart1::class);
Route::get('/data/show-1/horizontal-bar-chart-1', Show1HorizontalBarChart1::class);
