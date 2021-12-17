<?php

namespace App;

class FormattingIncorrectLinting
{
    public function __construct()
    {
    }

    public function randomNumber(): int
    {
        $hello = 'world!';
        return rand(0, 9);
    }
}
