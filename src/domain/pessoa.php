<?php

    class Pessoa{

    private $idPessoa;
    private $nome;
    private $telefone;

    //GETs & SETs
    public function getIdPessoa(){ //Pegar
        return $this->idPessoa;
    }
    public function setIdPessoa($id){
        $this->idPessoa = $id;
    }

    public function getNome(){ 
        return $this->nome;
    }
    public function setNome($nom){
        $this->nome = $nom;
    } 

    public function getTelefone(){ 
        return $this->telefone;
    }
    public function setTelefone($tel){
        $this->telefone = $tel;
    } 
}