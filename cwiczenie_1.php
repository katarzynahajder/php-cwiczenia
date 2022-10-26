<?php
    class Ssak
    {
        private $kolorOczu;
        public function setKolorOczu($kolor){
            $this->kolorOczu=$kolor;
        }
        public function getKolorOczu(){
            return $this->kolorOczu;
        }
    }
    class Pies extends Ssak
    {
        private $rasa;
        public function setRasa($rasa){
            $this->rasa=$rasa;
        }
        public function getRasa(){
            return $this->rasa;
        }
    }
    $pies=new Pies();
    $pies->setKolorOczu("brązowe");
    $pies->setRasa("szpic pomorski");
    print "Mój pies:<br>";
    print "rasa: ".$pies->getRasa()."<br>";
    print "kolor oczu: ".$pies->getKolorOczu();
?>