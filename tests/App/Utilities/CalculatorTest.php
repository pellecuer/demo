<?php

namespace Tests\App\Utilies;

use PHPUnit\Framework\TestCase;
use App\Utilities\Calculator;

class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function addition_should_work()
    {
        $calculator = new Calculator;
        $result = $calculator->add(10, 3);

        $this->assertEquals(13, $result);        
    }

    /**
     * @test
     */
    public function substraction_should_work()
    {
        $calculator = new Calculator;
        $result = $calculator->substract(10, 6);

        $this->assertEquals(4, $result);

    }
    
}
