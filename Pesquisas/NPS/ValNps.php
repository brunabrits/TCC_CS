<?php
class  Valnps {// era teste 

// get e set das respostas do nps//
    private $nomenps,$dtnps,$emainps, $nps;

        public function getNomenps()
        {
            return $this->nomenps;
        }

        public function setNomenps($nomenps)
        {
            $this->nomenps = $nomenps;
        }

        //-------------nome----------------------//
        public function getDtnps()
        {
            return $this->dtnps;
        }

        public function setDtnps($dtnps)
        {
            $this->dtnps = $dtnps;
        }

        //--------------data----------------------------//
        public function getEmainps()
        {
            return $this->emainps;
        }

        public function setEmainps($emainps)
        {
            $this->emainps = $emainps;
        }

        //-----------------email-------------------------//

        public function getNps()
        {
            return $this->nps;
        }

        public function setNps($nps)
        {
            $this->nps = $nps;
        }

        //-------------------nps-----------------------//

        /*public function ValiNps(){

        if ($nps<=6)
        {
            echo("Detrator");
        }
        
        else if ($nps ==7 or $nps ==8)
        {
            echo("Passivo/Neutro");
        }
        
        else if ($nps ==9 or $nps ==10)
        {
            echo("Promotores");
        }
        
        else
        {
            echo("ERRO NPS ");
        }
*/
    }

?>