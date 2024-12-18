<?php

namespace App\DTO;

class ExchangeDto {

    public function __construct(
        public float $amount,
        public string $cripto,
        public string $exchange
    ) {}
}