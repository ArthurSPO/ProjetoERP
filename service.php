<?php


    class Service{

        private $conexao;
        private $produto;

        public function __construct(Conexao $conexao, Produto $produto){
            $this->conexao = $conexao->conectar();
            $this->produto = $produto;

        }

        public function inserir(){
            $query = 'insert into p00_produto(p00_descricao)values(:produto) ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':produto', $this->produto->__get('descricao'));
            $stmt->execute();
        }


    }

?>