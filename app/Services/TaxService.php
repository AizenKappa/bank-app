<?php

namespace App\Services;


class TaxService{

    const TAX = 0.2;

    public function tva(float $amount):float
    {
        return round(self::TAX*$amount,2);
    }
}