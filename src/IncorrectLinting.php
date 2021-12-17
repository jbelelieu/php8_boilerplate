<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

namespace App;

/**
 * This file should trigger a linting error, but not error out.
 */
class IncorrectLinting
{
    public function __construct()
    {
    }

    public function randomNumber(): int
    {
        $hello = 'world!';
        return random_int(0, 9);
    }
}
