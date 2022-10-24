
<?php
function recolherMsg() 
{
    return "Seja bem vindo(a)!";
}

recolherMsg();
$m = recolherMsg();
echo $m;
echo "<br>", recolherMsg();
echo "<br>";

echo "<br>";

function recolherMsgComNome($name) 
{
    return "Ola, {$name}!";
}

echo "<br>", recolherMsgComNome("Pedro");
echo "<br>", recolherMsgComNome("Henrique");

echo "<br>";

function calc($c, $d) 
{
    return $c + $d;
    
}

$t = 10;
$i = 340;
echo "<br>", calc(125, 783);
echo "<br>", calc($t, $i);

