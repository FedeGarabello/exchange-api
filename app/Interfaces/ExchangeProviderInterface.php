<?php 

namespace App\Interfaces;

use App\DTO\ExchangeDto;

interface ExchangeProviderInterface
{
    public function getExchangeRate(): array;
}