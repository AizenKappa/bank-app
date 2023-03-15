<?php

namespace App\Services;


class TaxService{

    const TAX = 0.2;

    public function tva(float $amount){
        return round(self::TAX*$amount,2);
    }
}