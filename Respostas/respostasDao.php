<?php

include '../Cadastro/conexao.php';

class RespostasDao
{
    public function Buscar()
    {
        $sql = 'SELECT Id_resposta, Vlr_resposta, Email_resposta FROM Respostas;';
        $sql2 = 'SELECT Id_pesquisa, Tp_pesquisa FROM Pesquisa;';

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

    /*public function BuscarPq()
    {
        $sql = 'SELECT Tp_pesquisa FROM Pesquisa;';

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

    public function BuscarPg()
    {
        $sql = 'SELECT Nm_pergunta FROM Perguntas;';

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
*/
}


?>