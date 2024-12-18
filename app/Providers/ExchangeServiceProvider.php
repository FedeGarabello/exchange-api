<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ExchangeAggregator\ExchangeAggregatorService;

class ExchangeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ExchangeAggregatorService::class, function($app){
            return new ExchangeAggregatorService([
                $app->make('App\Repository\ExchangeRepository\BinanceExchangeRepository'),
                $app->make('App\Repository\ExchangeRepository\CoingeckoExchangeRepository'),
                $app->make('App\Repository\ExchangeRepository\CoinmarketcapExchangeRepository'),
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
