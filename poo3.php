<?php
    class countries{
        public $fr = "France";
        public $ar = "Argentina";
        public $br = "Brazil";
    }
    class players extends countries{
        public $p1 = "Messi";
        public $p2 = "Neymar";
        public $p3 = "Mbappé";
        public function player(){
            return $this -> p2." = country is ".$this-> br;
        }
    }
    $p = new players;
    echo $p -> player();
?>