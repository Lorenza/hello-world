<?php

use HelloWorld\SayHello;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload


class SayHelloTest extends TestCase {
    public function testWorld()
    {
        $this->assertEquals("hello world, composer!", SayHello::world());
    }

    public function testUpperCaseWorld()
    {
        $this->assertEquals('HELLO WORLD, COMPOSER!', SayHello::upperCaseWorld());
    }

    public function testUcwordsWorld()
    {
        $this->assertEquals('Hello World, Composer!', SayHello::ucWordsWorld());
    }

}
