<?php
// src/UserService.php
class UserService {
    public function register($username, $db) {
        return $db->insert('users', ['name' => $username]);
    }
}
