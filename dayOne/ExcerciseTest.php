<?php
use PHPUnit\Framework\TestCase;

require(__DIR__ . "/exercise.php");

class ExerciseTest extends TestCase
{
    public function testSuccess()
    {
        $lines = getLines(__DIR__ . "/input.txt");
        sort($lines);
        $this->assertEquals(report($lines, 2020), 514579);
    }
}
