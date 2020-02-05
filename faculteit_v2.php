<?php
echo("Van welk getal wil je de faculteit weten?".PHP_EOL);
$nummer = readline();

$var1 = 1;
$i = 1;

while ($i <= $nummer){

    $var1 = $var1 * $i;   
    $i++; 
}
echo("de Vaculteit van $nummer is $var1");

?>


