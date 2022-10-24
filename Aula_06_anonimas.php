
<?php

$calc = function ($a, $b) 
{
    return $a + $b;
};

echo $calc(1, 2) . "<br>";


echo "<br>";


function exec ($a, $b, $op, $func) 
{
    $final = $func($a, $b);
    echo "$a $op $b = $final <br>";
}

exec(2, 3, '+', $calc);


echo "<br>";


$mult = function($a, $b) 
{
    return $a * $b;
};

exec(2, 3, '*', $mult);

