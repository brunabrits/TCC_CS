<?php

namespace Respostas\Entity;

use Database\Conexao\Database;
use \PDO;

class Resposta{
    /**
     * Identificador único da resposta
     * @var integer
     */
    public $Id_resposta;

    /**
     * Valor da Resposta
     * @var integer
     */
    public $Vlr_resposta;

    /**
     * Email de quem respondeu a Pesquisa
     * @var string
     */
    public $Email_resposta;

    /**
     * Data de Nascimento de quem respondeu a pesquisa
     * @var string
     */
    public $Dt_nasc;

    public static function getRespostas($where = null, $order = null, $limit = null)
    {
        return (new Database('Respostas'))->select($where, $order, $limit)
                                         ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
}