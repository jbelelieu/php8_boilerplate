<?php

use App\CorrectLinting;
use PHPUnit\Framework\TestCase;

final class MainTest extends TestCase
{
    public function testRandomNumberIsBetween0And9(): void
    {
        $randomNumber = (new CorrectLinting())->randomNumber();

        $this->assertGreaterThanOrEqual(0, $randomNumber);
        $this->assertLessThanOrEqual(9, $randomNumber);
    }
}
