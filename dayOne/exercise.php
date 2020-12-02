<?php

$lines = explode(PHP_EOL, file_get_contents(__DIR__ . "/input.txt"));

$index = 0;

function getLines(string $filePath): array {
    return explode(PHP_EOL, file_get_contents($filePath));
}

function report(array &$lines, int $targetValue): int {
    if (!$lines || count($lines) < 2) {
        return 0;
    }
    for ($i = 0; $i < count($lines); $i++) {
        for ($j = $i + 1; $j < count($lines); $j++) {
            if ($lines[$i] + $lines[$j] === $targetValue) {
                return $lines[$i] * $lines[$j];
            }
        }
    }
    return 0;
}
