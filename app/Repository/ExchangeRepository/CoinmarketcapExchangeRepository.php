<?php 

namespace App\Repository\ExchangeRepository;

use App\Interfaces\ExchangeProviderInterface;
use App\DTO\ExchangeDto;

class CoinmarketcapExchangeRepository implements ExchangeProviderInterface
{

    public function getExchangeRate(): array
    {
        $data[] = new ExchangeDto(1000, "Hola Mundo", "CoinMarketCap");
        return $data;
    }

}