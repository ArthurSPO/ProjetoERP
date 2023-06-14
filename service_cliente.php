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
            $query = 'select c.c00_codigo, c.c00_nome, t.tipo, c.c00_cnpj, c.c00_estado, c.c00_data_nascimento
            from c00_cliente as c
            left join tipo_cliente as t on (c.c00_pessoa = t.id)
            '; 
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function remover(){
            $query = 'delete from c00_cliente where c00_codigo = :cod';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->cliente->__get('cod_cliente'));
            $stmt->execute();
        }

        public function atualizarNome(){
            $query = "UPDATE c00_cliente 
            SET c00_nome = IF(:nome <> '', :nome, c00_nome),
                c00_codigo = IF(:cod <> '', :cod, c00_codigo),
                c00_pessoa = IF(:pessoa <> '', :pessoa, c00_pessoa),
                c00_cnpj = IF(:cnpj <> '', :cnpj, c00_cnpj),
                c00_estado = IF(:estado <> '', :estado, c00_estado),
                c00_data_nascimento = IF(:data <> '', :data, c00_data_nascimento)
            WHERE c00_codigo = :cod";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':cod', $this->cliente->__get('cod_cliente'));
            $stmt->bindValue(':nome', $this->cliente->__get('nome'));
            $stmt->bindValue(':pessoa', $this->cliente->__get('pessoa'));
            $stmt->bindValue(':cnpj', $this->cliente->__get('cnpj'));
            $stmt->bindValue(':estado', $this->cliente->__get('estado'));
            $stmt->bindValue(':data', $this->cliente->__get('data_nascimento'));
            return $stmt->execute();
        }
    }

?>