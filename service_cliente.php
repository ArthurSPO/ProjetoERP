<?php


    class ServiceCliente{

        private $conexao;
        private $cliente;

        public function __construct(Conexao $conexao, Cliente $cliente){
            $this->conexao = $conexao->conectar();
            $this->cliente = $cliente;

        }

        public function inserir(){
            $query = 'insert into c00_cliente(c00_codigo, c00_nome, c00_pessoa, c00_cnpj, c00_estado, c00_data_nascimento)values(:cod, :nome, :pessoa, :cnpj, :estado, :data) ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->cliente->__get('cod_cliente'));
            $stmt->bindValue(':nome', $this->cliente->__get('nome'));
            $stmt->bindValue(':pessoa', $this->cliente->__get('pessoa'));
            $stmt->bindValue(':cnpj', $this->cliente->__get('cnpj'));
            $stmt->bindValue(':estado', $this->cliente->__get('estado'));
            $stmt->bindValue(':data', $this->cliente->__get('data_nascimento'));
            $stmt->execute();
        }

        public function recuperar(){
            $query = 'select * from c00_cliente';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        // public function remover(){
        //     $query = 'delete from p00_produto where p00_codigo = :cod';
        //     $stmt = $this->conexao->prepare($query);
        //     $stmt->bindValue(':cod', $this->produto->__get('cod'));
        //     $stmt->execute();
        // }

        // public function atualizarDescricao(){
        //     $query = 'update p00_produto set p00_descricao = :descricao where p00_codigo = :cod';
        //     $stmt = $this->conexao->prepare($query);
        //     $stmt->bindValue(':descricao', $this->produto->__get('descricao'));
        //     $stmt->bindValue(':cod', $this->produto->__get('cod'));
        //     return $stmt->execute();
        // }
        // public function atualizarCod(){
        //     $query = 'update p00_produto set p00_codigo = :cod where p00_codigo = :id';
        //     $stmt = $this->conexao->prepare($query);
        //     $stmt->bindValue(':cod', $this->produto->__get('cod'));
        //     $stmt->bindValue(':id', $this->produto->__get('id'));
        //     return $stmt->execute();
        // }
        // public function atualizarPreco(){
        //     $query = 'update p00_produto set p00_preco = :preco where p00_codigo = :cod';
        //     $stmt = $this->conexao->prepare($query);
        //     $stmt->bindValue(':preco', $this->produto->__get('preco'));
        //     $stmt->bindValue(':cod', $this->produto->__get('cod'));
        //     return $stmt->execute();
        // }
        // public function atualizarImposto(){
        //     $query = 'update p00_produto set p00_imposto = :imposto where p00_codigo = :cod';
        //     $stmt = $this->conexao->prepare($query);
        //     $stmt->bindValue(':imposto', $this->produto->__get('imposto'));
        //     $stmt->bindValue(':cod', $this->produto->__get('cod'));
        //     return $stmt->execute();
        // }
        
    

    }

?>