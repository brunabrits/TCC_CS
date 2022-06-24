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
     * Tipo da Pesquisa
     * @var string
     */
    private $Tp_pesquisa;
    
    /**
     * ID da Pesquisa 
     * @var integer
     */
    private $Id_pesquisa;


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
        Obtem o Tipo de Pesquisa
    */
    public function getTp_pesquisa()
    {
        return $this->Tp_pesquisa;
    }

    /*
        Define o tipo de Pesquisa
    */
    public function setTp_pesquisa($Tp_pq)
    {
        $this->Tp_pesquisa = $Tp_pq;
    }

    /*
        Obtem o ID da Pesquisa
    */
    public function getId_pesquisa()
    {
        return $this->Id_pesquisa;
    }

    /*
        Define o ID da Pesquisa
    */
    public function setId_pesquisa($Id_p)
    {
        $this->Id_pesquisa = $Id_p;
    }
}