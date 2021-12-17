<?php

class Main
{
    public function __construct()
    {
    }

    public function randomNumber(): int
    {
        return rand(0, 10);
    }
}
