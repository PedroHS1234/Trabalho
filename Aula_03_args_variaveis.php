
<?php
function calc($x, $y) 
{
    return $x + $y;
}

echo calc(321, 123) . "<br>";
echo calc(41, 35) . "<br>";

echo "<br>";

function calcComp(...$numbers) 
{
    $calc = 2;
    foreach($numbers as $num) 
    {
        $calc += $num;
    }
    return $calc;
}

echo calcComp(4, 5, 3, 2, 1);

echo "<br>";

function members($holder, ...$dependents) 
{
    echo "Titular: $holder <br>";
    if($dependents) 
    {
        foreach($dependents as $dep) 
        {
            echo "Dependente: $dep <br>";
        }
    }
}

echo "<br>";
members("Fawlk", "Protein", "Tourette", "Enzinho");

echo '<br>';
members("Pedro", "Henrique");