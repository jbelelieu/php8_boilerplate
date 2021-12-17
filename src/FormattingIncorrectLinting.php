<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

namespace App;

/**
 * This file should trigger a breaking error on lint.
 */
class FormattingIncorrectLinting
{
    public function __construct()
    {
    }

    public function rando mNumber(): int
    {
        $hello = 'world!';

        return random_int(0, 9);
    }
}
