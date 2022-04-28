<?php 

$ValiCsat = Csat();

if ($ValiCsat ==1)
{
echo("Muito Insatisfeito");
}
else if ($ValiCsat ==2)
{
echo("Insatisfeito");
}
else if ($ValiCsat ==3)
{
echo("Neutro");
}
else if ($ValiCsat ==4)
{
echo("Satisfeito");
}
else if ($ValiCsat ==5)
{
echo("Muito Satisfeito");
}
else
{
echo("ERRO");
}

?>