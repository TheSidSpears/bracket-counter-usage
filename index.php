#!/usr/bin/env php
<?php

//include_once('src/BracketCounter.php');
include_once('vendor/autoload.php');
$attributes = getopt('s:');
$expression = array_shift($attributes);

$counter = new BracketCounter();

try {
    if ($counter->validateExpression($expression)) {
        echo 'Expression is valid';
    } else {
        echo 'Expression is invalid';
    }
} catch (InvalidArgumentException $e) {
    echo 'Expression is invalid: ' . $e->getMessage();
}

echo "\n";