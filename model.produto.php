<?php

    
    
    class Produto{

        private $cod;
        private $id;
        private $descricao;
        private $preco;
        private $imposto;
        private $lig;
        
    public function __get($atributo){
        return $this->$atributo;
    }

    public function __set($atributo, $value){
        $this->$atributo = $value;
    }

    }


?>