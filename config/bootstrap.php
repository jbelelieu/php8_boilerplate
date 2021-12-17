<?php

declare(strict_types=1);

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

use Dotenv\Dotenv;

// Load environment variables
$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

// Load composer autoload file
require dirname(__DIR__).'/vendor/autoload.php';

// Set default timezone
date_default_timezone_set($_ENV['APP_TIMEZONE']);
