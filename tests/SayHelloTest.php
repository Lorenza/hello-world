<?php

use HelloWorld\SayHello;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


class SayHelloTest extends TestCase {
    public function testWorld()
    {
        $this->assertInternalType('string', SayHello::world());        
    }
    public function testUpperCaseWorld()
    {
        $this->assertInternalType('string', SayHello::upperCaseWorld());        
    }

    public function testUcwordsWorld()
    {
        $this->assertInternalType('string', SayHello::upperCaseWorld());        
    }

}


