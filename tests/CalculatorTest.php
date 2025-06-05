<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calc = new Calculator();
        $result = $calc->add(2, 3);
        $this->assertEquals(5, $result); // ✅ Should pass
    }
}
