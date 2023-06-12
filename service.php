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
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function remover(){
            $query = 'delete from p00_produto where p00_codigo = :cod';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            $stmt->execute();
        }

        public function atualizarDescricao(){
            $query = 'update p00_produto set p00_descricao = :descricao where p00_codigo = :cod';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':descricao', $this->produto->__get('descricao'));
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            return $stmt->execute();
        }
        public function atualizarCod(){
            $query = 'update p00_produto set p00_codigo = :cod where p00_codigo = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            $stmt->bindValue(':id', $this->produto->__get('id'));
            return $stmt->execute();
        }
        public function atualizarPreco(){
            $query = 'update p00_produto set p00_preco = :preco where p00_codigo = :cod';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':preco', $this->produto->__get('preco'));
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            return $stmt->execute();
        }
        public function atualizarImposto(){
            $query = 'update p00_produto set p00_imposto = :imposto where p00_codigo = :cod';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':imposto', $this->produto->__get('imposto'));
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            return $stmt->execute();
        }
        
    

    }

?>