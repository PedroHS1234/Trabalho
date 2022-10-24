
<?php
function salutation($name = "Senhor(a)", $lastName = "Cliente") 
{
    return "Bem vindo, $name $lastName!<br>";
}

echo salutation();
echo salutation(null);
echo salutation(null, null);
echo salutation("Amado", "Batista");

echo "<br>";

function takeorder($alimento, $bebida = "Suco") 
{
    echo "Alimento: $alimento <br>";
    echo "Bebida: $bebida <br>";
}

takeorder("Lasanha");
takeorder("Arroz", "Refrigerante");

echo "<br>";

function takeorder2($bebida = "Coca-Cola", $alimento) {
    echo "Para comer: $alimento <br>";
    echo "Para beber: $bebida <br>";
}


takeorder2("Pepsi2", "Arroz2");