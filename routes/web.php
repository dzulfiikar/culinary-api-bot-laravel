<?php

use App\Http\Responses\FormatResponse;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return FormatResponse::ok();
});
