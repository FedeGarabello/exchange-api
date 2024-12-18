<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ExchangeApiController;

Route::get('/exchanges', [ExchangeApiController::class, 'getExchanges']);
