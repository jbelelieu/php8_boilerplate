<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

namespace App;

class FormattingIncorrectLinting
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
