<?php
use PHPUnit\Framework\TestCase;

require(__DIR__ . "/exercise.php");

class ExerciseTest extends TestCase
{
    public function testSuccess()
    {
        $lines = getLines(__DIR__ . "/input.txt");
        $this->assertEquals(report($lines, 2020), 514579);
    }

    public function testLargerInput() {
        $lines = getLines(__DIR__ . "/largerInput.txt");
        $this->assertTrue(report($lines, 2020) > 0);
    }
}
