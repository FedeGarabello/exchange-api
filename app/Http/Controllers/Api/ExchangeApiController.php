<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ExchangeAggregator\ExchangeAggregatorService;

class ExchangeApiController extends Controller
{
    private $exchangeAggregator;

    public function __construct(ExchangeAggregatorService $exchangeAggregator) {
        $this->exchangeAggregator = $exchangeAggregator;
    }

    public function getExchanges()
    {
        return response()->json($this->exchangeAggregator->getExchangeRates());
    }
}
