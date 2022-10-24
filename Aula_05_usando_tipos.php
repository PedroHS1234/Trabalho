
<?php
function calc1($x, $y) 
{

    return $x + $y;
}

echo calc1(3, 4) . "<br>";
echo calc1(3.7, 4.5) . "<br>";

echo "<br>";

function calc2(int $x, int $y)
{
    return $x + $y;
}

echo calc2(3, 4) . "<br>";
echo calc2(3.7, 4.5) . "<br>";

echo "<br>";

