<?php

require_once 'Dollar.php';


class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertEquals(10, $product->amount);
        $product = $five->times(3);
        $this->assertEquals(15, $product->amount);
    }

    public function testEquality()
    {
        $five = new Dollar(5);
        $this->assertTrue($five->equals(new Dollar(5)));
        $five = new Dollar(5);
        $this->assertFalse($five->equals(new Dollar(6)));
    }
}
