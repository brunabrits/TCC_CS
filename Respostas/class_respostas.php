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
    
    /**
     * Chave Estrangeira que define o tipo de pesquisa enviada
     * @var integer
     */
    private $fk_Id_pergunta;


    //----------Sets e Gets----------//


    /*
        Obtem o ID da resposta
    */
    public function getId_resposta()
    {
        return $this->Id_resposta;
    }

    /*
        Define o ID da Resposta
    */
    public function setId_resposta($Id_r)
    {
        $this->Id_resposta = $Id_r;
    }

    /*
        Obtem o Valor da Resposta
    */
    public function getVlr_resposta()
    {
        return $this->Vlr_resposta;
    }

    /*
        Define o Valor da Resposta
    */
    public function setVlr_resposta($Vlr_r)
    {
        $this->Vlr_resposta = $Vlr_r;
    }

    /*
        Obtem o valor do Email da Resposta
    */
    public function getEmail_resposta()
    {
        return $this->Email_resposta;
    }

    /*
        Define o Email da Resposta
    */
    public function setEmail_resposta($Email_r)
    {
        $this->Email_resposta = $Email_r;
    }

    /*
        Obtem a data de Nascimento de quem enviou a Resposta
    */
    public function getDt_nasc()
    {
        return $this->Dt_nasc;
    }

    /*
        Define a data de Nascimento de quem enviou a Resposta
    */
    public function setDt_nasc($Dn_r)
    {
        $this->Dt_nasc = $Dn_r;
    }

    /*
        Obtem a chave estrangeira
    */
    public function getFk_Id_pergunta()
    {
        return $this->fk_Id_pergunta;
    }

    /*
        Define a Chave estrangeira
    */
    public function setFk_Id_pergunta($fk_p)
    {
        $this->fk_Id_pergunta = $fk_p;
    }
}