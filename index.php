<?php

include __DIR__.'/classes/Prova1.php';
include __DIR__.'/classes/Prova2.php';

use Spazio1\Prova as Prova1;
use Spazio2\Prova as Prova2;

$test = new Prova1('Gaetano');
$test2 = new Prova2('Gaetano');

echo $test->getName();
echo $test2->getName();