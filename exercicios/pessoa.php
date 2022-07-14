<?php
/**
*Entidade Pessoa
*@autor Julia Barater
**/
class Pessoa{
    /**
     * Estabelece o Nome da pessoa 
    */
    private $nome;
    /**
     * Estabelece o CPF da pessoa 
    */
    private $cpf;
    /**
     * Estabelece o RG da pessoa 
    */
    private $rg;
    /**
     * Estabelece o data de nascimento da pessoa 
    */
    private $datanasc;
    /**
     * pega o cpf da pessoa
    */
    public function getCpf(){
        return $this->cpf;
    }
    /**
     * pega o nome da pessoa
    */
    public function getNome(){
        return $this->nome;
    }
    /**
     * pega o rg da pessoa
    */
    public function getRg(){
        return $this->rg;
    }
    /**
     * pega a data de nascimento da pessoa
    */
    public function getDatanasc(){
        return $this->datanasc;
    }

    /**
     * define o cpf da pessoa
    */
    public function setCpf($e){
        return $this->cpf = $e;
    }
    /**
     * define o nome da pessoa
    */
    public function setNome($e){
        return $this->nome = $e;
    }
    /**
     * define o RG da pessoa
    */
    public function setRg($e){
        return $this->rg = $e;
    }
    /**
     * define a data de nascimento da pessoa
    */
    public function setDatanasc($e){
        return $this->datanasc = $e;
    }
}
?>