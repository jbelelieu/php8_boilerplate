<?php

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
     *
     * @return integer
     */
    public function randomNumber(): int
    {
        return rand(0, 9);
    }
}
