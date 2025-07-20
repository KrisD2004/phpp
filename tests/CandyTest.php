<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Candy.php';

class CandyTest extends TestCase {
    public function testCandy(){
        $Candy = new Candy();
        $result = $Candy->CandyPick(30, 'orange');
        $this->assertTrue($result);
    }
    public function testNonCandy (){
        $candy = new Candy();
        $result = $candy->CandyPick(39, 'purple');
        $this->assertFalse($result);
    }
}