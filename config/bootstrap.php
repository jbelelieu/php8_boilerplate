<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

// Load composer autoload file
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/globalFunctions.php';

// Load environment variables
if (!isset($_ENV['APP_ENV']) || $_ENV['APP_ENV'] === 'test') {
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
}

// Set default timezone
date_default_timezone_set($_ENV['APP_TIMEZONE']);
