<?php

require __DIR__ . '/../vendor/autoload.php';

use Guagualai\Practice\Calculator;

$calculator = new Calculator();

echo $calculator->add(1, 2);