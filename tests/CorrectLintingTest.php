<?php

/*
 * Modern PHP Boilterplate
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

use App\CorrectLinting;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class CorrectLintingTest extends TestCase
{
    public function testRandomNumberIsBetween0And9(): void
    {
        $randomNumber = (new CorrectLinting())->randomNumber();

        static::assertGreaterThanOrEqual(0, $randomNumber);
        static::assertLessThanOrEqual(9, $randomNumber);
    }
}
