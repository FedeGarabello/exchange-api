<?php 

namespace App\Repository\ExchangeRepository;

use App\Interfaces\ExchangeProviderInterface;
use App\DTO\ExchangeDto;

class CoingeckoExchangeRepository implements ExchangeProviderInterface
{

    public function getExchangeRate(): array
    {
        $data[] = new ExchangeDto(1000, "Hola Mundo", "Coingecko");
        return $data;
    }

}