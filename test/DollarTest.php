<?php

require_once 'Dollar.php';
require_once 'Franc.php';


class DollarTest extends PHPUnit_Framework_TestCase
{
    public function testMultiplication()
    {
        $five = Money::dollar(5);
        $this->assertEquals(Money::dollar(10), $five->times(2));
        $this->assertEquals(Money::dollar(15), $five->times(3));
    }

    public function testFrancMultiplication()
    {
        $five = new Franc(5);
        $this->assertEquals(new Franc(10), $five->times(2));
        $this->assertEquals(new Franc(15), $five->times(3));
    }

    public function testEquality()
    {
        $five = new Dollar(5);
        $this->assertTrue($five->equals(new Dollar(5)));
        $five = new Dollar(5);
        $this->assertFalse($five->equals(new Dollar(6)));

        $five = new Franc(5);
        $this->assertTrue($five->equals(new Franc(5)));
        $five = new Franc(5);
        $this->assertFalse($five->equals(new Franc(6)));

        $five = new Franc(5);
        $this->assertFalse($five->equals(new Dollar(5)));
    }
}
