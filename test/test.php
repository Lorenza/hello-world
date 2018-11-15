<?php
require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload
use HelloWorld\SayHello;

echo SayHello::world() . PHP_EOL;
echo SayHello::upperCaseWorld() . PHP_EOL;
echo SayHello::ucWordsWorld() . PHP_EOL;
