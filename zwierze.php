<?php
    class Zwierze
    {
        private $nazwa;
        private $gatunek;
        private $odzywianie;
        private $senzimowy;
        private $poruszanie;
        public function __construct($nazwa, $gatunek, $odzywianie, $senzimowy, $poruszanie){
            $this->nazwa=$nazwa;
            $this->gatunek=$gatunek;
            $this->odzywianie=$odzywianie;
            $this->senzimowy=$senzimowy;
            $this->poruszanie=$poruszanie;
        }
        public function podstawowe_informacje(){
            print "Zwierzę ".$this->nazwa." należy do gatunku ".$this->gatunek.", jest ".$this->odzywianie.". ";
            if($this->senzimowy)print "Zapada w sen zimowy.<br>";
            else print "Nie zapada w sen zimowy.<br>";
        }
        public function zwierze_idzie(){
            if($this->poruszanie=="chodzenie")print $this->nazwa." idzie 'tup tup tup'<br><br>";
            else if($this->poruszanie=="latanie")print $this->nazwa." lata 'fur fur fur'<br><br>";
            else if($this->poruszanie=="plywanie")print $this->nazwa." pływa 'plusk plusk plusk'<br><br>";
            else if($this->poruszanie=="pelzanie")print $this->nazwa." pełza 'szur szur szur'<br><br>";
            else if($this->poruszanie=="skakanie")print $this->nazwa." skacze 'hop hop hop'<br><br>";
            else print $this->nazwa." porusza sie w nieokreślony sposób<br><br>";
        }
    }
    $zaba=new Zwierze("żaba", "płaz", "wszystkożerca", false, "skakanie");
    $zaba->podstawowe_informacje();
    $zaba->zwierze_idzie();
    $niedzwiedz=new Zwierze("niedźwiedź", "ssak", "wszystkożerca", true, "chodzenie");
    $niedzwiedz->podstawowe_informacje();
    $niedzwiedz->zwierze_idzie();
?>