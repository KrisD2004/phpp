<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Bank.php';

class BankintergrationTest extends TestCase{

    public function testCardUnApproval(){
        $bank = new Bank();
        $result = $bank->processAtm('discover', 30);
        $this->assertFalse($result); // this test should run false!

    }

    public function testCardApproval(){
        $bank = new Bank();
        $result = $bank->proceessAtm('visa', 354);
        $this->assertTrue($result); // this test should run true!!

    }
}