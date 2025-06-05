<?php
// tests/UserServiceTest.php
use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/UserService.php';

class FakeDB {
    public $lastInsert;

    public function insert($table, $data) {
        $this->lastInsert = $data['name'];
        return true;
    }
}

class UserServiceTest extends TestCase {
    public function testRegister() {
        $db = new FakeDB();
        $service = new UserService();

        $success = $service->register("Kristian", $db);

        $this->assertTrue($success);                    // ✅ Test return
        $this->assertEquals("Kristian", $db->lastInsert); // ✅ Test database got name
    }
}
