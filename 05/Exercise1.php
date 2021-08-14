<?php
function stringCodelex (string $string):string{
    return $string.'codelex';
}

$functionValue = stringCodelex('ABCD');

echo $functionValue;