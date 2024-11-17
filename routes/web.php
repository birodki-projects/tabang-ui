<?php

use App\Livewire\HomePage1;
use Illuminate\Support\Facades\Route;

Route::get('/', HomePage1::class);
    return view('welcome');
});
