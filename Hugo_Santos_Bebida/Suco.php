<?php
require_once "Bebida.php";

Class Suco extends Bebida{
    private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function mostrarBebida(){
     return "Nome: " . $this->getNome() . ", Preço: " . $this->getPreco() . ", Sabor: " . $this->sabor;
    }

    public function verificarPreco(){
        if($this->getPreco() < 2.5){
            return true;
         }else if($this->getPreco() > 2.5){
         return false;
         }
    }
}


?>