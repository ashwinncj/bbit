<?php
namespace Bbit\Api;

if (!defined('BBIT_API')) {
    die('Direct Access Not Allowed!');
}

require __DIR__ . './../vendor/autoload.php';

class Auth
{
    public function __construct()
    {
    }

    public static function authenticate($token)
    {
        return false;
    }
}