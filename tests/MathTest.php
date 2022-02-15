<?php
namespace App;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase{

    protected Math $math;

    protected function setUp(): void
    {
        $v1 = 6;
        $v2 = 3;
        $this->math = new Math($v1,$v2);
    }

    public function testSum(){
        $this->assertEquals(9,$this->math->sum());
    }

    public function testSubtraction(){
        $this->assertEquals(3,$this->math->subtraction());
    }

    public function testMultiplication(){
        $this->assertEquals(18,$this->math->multiplication());
    }

    public function testDivision(){
        $this->assertEquals(2,$this->math->division());
    }
}