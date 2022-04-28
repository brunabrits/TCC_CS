<?php 

$ValiNps = Nps();

if ($ValiNps >=0 && $ValiNps <=6)
{
echo("Detrator");
}
else if ($ValiNps >=7 && $ValiNps <=8)
{
echo("Passivo");
}
else if ($ValiNps >=9 && $ValiNps <=10)
{
echo("Promotores");
}
else
{
echo("ERRO");
}

?>