<?php
use PHPUnit\Framework\TestCase;
use Bbit\Api\Auth;
define('BBIT_API', true);

class InitTest extends TestCase
{
    public function testApiInit()
    {
        $auth = new Auth();
        $this->assertFalse($auth->authenticate('test-token'));
    }
}
