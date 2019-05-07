<?php declare(strict_types=1);

require 'vendor/autoload.php';

$app = new \OneMustCode\ApiFramework\Application(
    realpath(__DIR__)
);

$app->start();
