<?php
require_once "Bebida.php";
Class vinho extends Bebida{
    private $safra;
    private $tipo;

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getSafra(){
        return $this->safra;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function mostrarBebida(){
        return "Nome: ". $this->getNome() ." Preço: ". $this->getPreco() ." Safra: ". $this->safra. " tipo: ". $this->tipo;
    }

    public function verificarPreco(){
        if($this->getPreco() < 25){
            return true;
         }else if($this->getPreco() > 25){
         return false;
         }
      }
    }



?>