<?php

use App\Http\Responses\FormatResponse;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\json;

Route::get('/', function () {
    return FormatResponse::ok();
});
