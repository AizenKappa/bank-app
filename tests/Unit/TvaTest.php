<?php

namespace Tests\Unit;

use App\Services\TaxService;
use PHPUnit\Framework\TestCase;

class TvaTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_calculate_taxt(): void
    {
        $price = 10;
        $predictedTax = 10*0.2;
        $result = (new TaxService())->tva($price);
        $this->assertEquals($predictedTax,$result);
    }
}
