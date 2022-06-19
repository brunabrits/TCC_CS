<?php

class Respostas{
    /**
     * Identificador único da resposta
     * @var integer
     */
    private $Id_resposta;

    /**
     * Valor da Resposta
     * @var integer
     */
    private $Vlr_resposta;

    /**
     * Email de quem respondeu a Pesquisa
     * @var string
     */
    private $Email_resposta;

    /**
     * Data de Nascimento de quem respondeu a pesquisa
     * @var string
     */
    private $Dt_nasc;

    //----------Busca o Id da Resposta----------//
    public function getId_resposta()
    {
        return $this->Id_resposta;
    }

    public function setId_resposta($Id_r)
    {
        $this->Id_resposta = $Id_r;
    }

    //----------Valor Resposta----------//
    public function getVlr_resposta()
    {
        return $this->Vlr_resposta;
    }

    public function setVlr_resposta($Vlr_r)
    {
        $this->Vlr_resposta = $Vlr_r;
    }

    //----------Email da Resposta----------//
    public function getEmail_resposta()
    {
        return $this->Email_resposta;
    }

    public function setEmail_resposta($Email_r)
    {
        $this->Email_resposta = $Email_r;
    }

    //----------Data de Nascimento de quem enviou a resposta----------//
    public function getDt_nasc()
    {
        return $this->Dt_nasc;
    }

    public function setDt_nasc($Dn_r)
    {
        $this->Dt_nasc = $Dn_r;
    }
}