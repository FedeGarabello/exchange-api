<?php 

namespace App\Services\ExchangeAggregator;

class ExchangeAggregatorService
{
    private array $exchangeProviders;

    public function __construct(array $exchangeProviders)
    {
        $this->exchangeProviders = $exchangeProviders;
    }

    public function getExchangeRates(): array
    {
        $exchangeRates = [];

        foreach ($this->exchangeProviders as $exchangeProvider) {
            $exchangeRates[] = $exchangeProvider->getExchangeRate();
        }

        return $exchangeRates;
    }
}