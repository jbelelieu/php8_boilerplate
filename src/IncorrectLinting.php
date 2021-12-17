<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 *
 * This file should be fixed, but not trigger an error on lint.
 */

namespace App;

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
