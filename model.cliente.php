<?php 

    
    class Cliente{
        private $cod_cliente;
        private $id;
        private $nome;
        private $pessoa;
        private $cnpj;
        private $estado;
        private $data_nascimento;

    public function __get($atributo){
        return $this->$atributo;
    }
    
    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    }

?>