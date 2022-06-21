<?php

include '../Cadastro/conexao.php';

class RespostasDao
{
    public function Buscar()
    {
        $sql = 'SELECT Pesquisa.Tp_pesquisa, Respostas.Id_resposta, Respostas.Vlr_resposta, Respostas.Email_resposta FROM Pesquisa INNER JOIN Respostas ON Pesquisa.Id_pesquisa = Respostas.fk_Tp_pesquisa;';

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