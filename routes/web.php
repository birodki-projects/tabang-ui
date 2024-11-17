<?php

use App\Livewire\Data\LineChart1;
use App\Livewire\Data\Show1;
use App\Livewire\HomePage1;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage1::class);
Route::get('/data/show-1', Show1::class);
Route::get('/data/line-chart-1', LineChart1::class);
