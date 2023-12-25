<?php
require_once(__DIR__ . '/../config/Connection.php');

class Logout
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
    }
}
