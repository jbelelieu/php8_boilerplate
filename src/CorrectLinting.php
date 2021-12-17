<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 *
 * This file should be fine.
 */

namespace App;

/**
 * Example of a class that should pass linting.
 */
class CorrectLinting
{
    public function __construct()
    {
    }

    /**
     * Generates a random number between 0 and 9.
     */
    public function randomNumber(): int
    {
        $hello = 'world';

        return random_int(0, 9);
    }

    public function voidReturn(): void
    {
    }
}
