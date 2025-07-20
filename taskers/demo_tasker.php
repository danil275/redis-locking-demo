<?php

declare(strict_types=1);

use Danil275\RedisLockingDemo\Handler\DemoHandler;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$now = new DateTime();
echo $now->format('H:i:s') . ' Task started' . PHP_EOL;

$demoHandler = new DemoHandler();
$demoHandler->handle();

$now = new DateTime();
echo $now->format('H:i:s') . ' Task completed' . PHP_EOL;
