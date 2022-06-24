<?php

Class Valcsat{

    public $nomecsat,$dtcsat,$emaicsat, $csat;

    public function getNomecsat()
        {
            return $this->nomecsat;
        }

        public function setNomecsat($nomecsat)
        {
            $this->nomecsat = $nomecsat;
        }

        //-------------nome----------------------//
        public function getDtcsat()
        {
            return $this->dtcsat;
        }

        public function setDtcsat($dtcsat)
        {
            $this->dtcsat = $dtcsat;
        }

        //--------------data----------------------------//
        public function getEmaicsat()
        {
            return $this->emaicsat;
        }

        public function setEmaicsat($emaicsat)
        {
            $this->emaicsat = $emaicsat;
        }

        //-----------------email-------------------------//

        public function getCsat()
        {
            return $this->csat;
        }

        public function setCsat($csat)
        {
            $this->csat = $csat;
        }

        //-------------------csat-----------------------//
    }
?>