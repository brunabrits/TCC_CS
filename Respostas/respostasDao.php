<?php

include '../Cadastro/conexao.php';

class RespostasDao
{
    public function Buscar()
    {
        $sql = 'SELECT * FROM Respostas';

        $bd = new Conexao();

        $con = $bd->getConexao();

        $stm = $con->prepare($sql);

        $stm->execute();

        if($stm->rowCount()>0)
        {
            $resultado = $stm->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }
    }
}


?>