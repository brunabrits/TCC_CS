<?php

class Conexao
{
    private static $instancia;

    public static function getConexao()
    {
        if(!isset(self::$instancia)){
            self::$instancia = new PDO('mysql:host=localhost; dbname=Tcc_cs; charset=utf8', 'root', '');
            return self::$instancia;
        }else{
            return self::$instancia;
        }	
    }
}

?>