<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

// Load composer autoload file
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/globalFunctions.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__), isset($appOverrideUnitTests) ? '.env.test' : '.env');
$dotenv->load();

// Set default timezone
date_default_timezone_set($_ENV['APP_TIMEZONE']);
