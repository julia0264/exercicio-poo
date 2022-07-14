<?php
require_once "Pessoa.php";

class Medico extends Pessoa{
    private $crm;
    public function getCrm(){
        return $this->crm;
    }
    public function setCrm($e){
        return $this->crm = $e;
    }
}
?>