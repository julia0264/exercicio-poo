<?php
require_once "Pessoa.php";

class Engenheiro extends Pessoa{
    private $crea;
    public function getCrea(){
        return $this->crea;
    }
    public function setCrea($e){
        return $this->crea = $e;
    }
}
?>