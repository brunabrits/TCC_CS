<?php

Class Valces{

    public $nomeces,$dtces,$emaices, $ces;

    public function getNomeces()
        {
            return $this->nomeces;
        }

        public function setNomeces($nomeces)
        {
            $this->nomeces = $nomeces;
        }

        //-------------nome----------------------//
        public function getDtces()
        {
            return $this->dtces;
        }

        public function setDtces($dtces)
        {
            $this->dtces = $dtces;
        }

        //--------------data----------------------------//
        public function getEmaices()
        {
            return $this->emaices;
        }

        public function setEmaices($emaices)
        {
            $this->emaices = $emaices;
        }

        //-----------------email-------------------------//

        public function getCes()
        {
            return $this->ces;
        }

        public function setCes($ces)
        {
            $this->ces = $ces;
        }

        //-------------------ces-----------------------//
    }
?>