
<?php
function printMsg() 
{
    echo "Ola <br>";
    echo "Como você esta? <br>";
}

printMsg();
printMsg();
printMsg();

echo "<br>";

$var = 1;

function changeValue() 
{
    $var = 3;
    echo "Durante a function: $var <br>";
}

echo "Antes da function: $var <br>";
changeValue();
echo "Depois da function: $var <br>";

echo "<br>";

function changeValueTrue() 
{
    global $var;
    $var = 55;
    echo "Durante a function: $var <br>";
}

echo "Antes da function: $var <br>";
changeValueTrue();
echo "Depois da function: $var <br>";