<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Dollars.php';
// this represents what class im in
Class DollarsTest extends TestCase {
    public function testDollars (){
        $money = new Dollars();
        $result = $money->dollarAmount(5,'5 dollar');
        $this->assertTrue($result);
    }
    public function testNonDollars (){
        $money = new Dollars();
        $result = $money->dollarAmount(5,'20 dollar');
        $this->assertFalse($result);
    }
    public function testDollarsAgain (){
        $money = new Dollars();
        $result = $money->dollarAmount(10,'10 dollar');
        $this->assertTrue($result);
    }
}