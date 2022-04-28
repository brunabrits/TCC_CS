<?php 

$ValiCes = Ces();

if ($ValiCes ==1)
{
echo("Discordo Totalmente");
}
else if ($ValiCes ==2)
{
echo("Discordo");
}
else if ($ValiCes ==3)
{
echo("Discordo Parcialmente");
}
else if ($ValiCes ==4)
{
echo("Indeciso");
}
else if ($ValiCes ==5)
{
echo("Concordo Parcialmente");
}
else if ($ValiCes ==6)
{
echo("Concordo");
}
else if ($ValiCes ==7)
{
echo("Concordo Totalmente");
}
else
{
echo("ERRO");
}

?>