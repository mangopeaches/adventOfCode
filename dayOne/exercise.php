<?php

$lines = explode(PHP_EOL, file_get_contents(__DIR__ . "/input.txt"));

$index = 0;

function getLines(string $filePath): array {
    return explode(PHP_EOL, file_get_contents($filePath));
}

function report(array &$lines, int $targetValue, bool $third = false): int {
    if (!$lines || count($lines) < 2 || ($third && count($lines) < 3)) {
        return 0;
    }
    for ($i = 0; $i < count($lines); $i++) {
        for ($j = $i + 1; $j < count($lines); $j++) {
            $twoSum = $lines[$i] + $lines[$j];
            if ($third) {
                for ($k = $j + 1; $k < count($lines); $k++) {
                    if ($twoSum + $lines[$k] === $targetValue) {
                        return $lines[$i] * $lines[$j] * $lines[$k];
                    }
                }
            } else if ($twoSum === $targetValue) {
                return $lines[$i] * $lines[$j];
            }
        }
    }
    return 0;
}
