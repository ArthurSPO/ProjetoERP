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
            $query = 'SELECT p.*, c.c00_nome
            FROM p00_produto p
            LEFT JOIN c00_cliente c ON p.p00_lig = c.c00_codigo';
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
        public function vincular(){
            $query = 'update p00_produto set p00_lig = :lig WHERE :cod = p00_codigo';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':lig', $this->produto->__get('lig'));
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            $stmt->execute();
        }
        public function recuperarLig(){
            $query = 'SELECT p00_produto.p00_lig, c00_cliente.nome
                      FROM p00_produto
                      JOIN c00_cliente ON p00_produto.p00_lig = c00_cliente.c00_cliente
                      WHERE p00_produto.p00_codigo = :cod'; 
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->produto->__get('cod'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
        
    }
?>