<?php
require_once "Bebida.php";
Class Refri extends Bebida{
    private $retornavel;
    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function getRetornavel(){
        return $this->retornavel;
    }

    public function mostrarBebida(){
        return "Nome: " . $this->getNome() . ", Preço: " . $this->getPreco() . ", Sabor: " . $this->retornavel;
       }
   
       public function verificarPreco(){
           if($this->getPreco() < 5){
               return true;
            }else if($this->getPreco() > 5){
            return false;
            }
       }
}


?>