<?php


    class Service{

        private $conexao;
        private $produto;

        public function __construct(Conexao $conexao, Produto $produto){
            $this->conexao = $conexao->conectar();
            $this->produto = $produto;

        }

        public function inserir(){
            $query = 'insert into p00_produto(p00_codigo, p00_descricao, p00_preco, p00_imposto)values(:cod, :produto, :preco, :imposto) ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':produto', $this->produto->__get('descricao'));
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            $stmt->bindValue(':preco', $this->produto->__get('preco'));
            $stmt->bindValue(':imposto', $this->produto->__get('imposto'));
            $stmt->execute();
        }

        public function recuperar(){
            $query = 'select p00_codigo, p00_descricao, p00_preco, p00_imposto from p00_produto';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }


    }

?>