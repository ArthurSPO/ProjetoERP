<?php 
    require "model.cliente.php";
    require "service_cliente.php";
    require "conexao.php";

     $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    if ($acao == 'inserir') {
        $cliente = new Cliente();
        $cliente->__set('cod_cliente', $_POST['cod']);
        $cliente->__set('nome', $_POST['nome']);
        $cliente->__set('estado', $_POST['estado']);
        $cliente->__set('pessoa', $_POST['tipo']);
        $cliente->__set('data_nascimento', $_POST['data']);
        if ($_POST['tipo'] == 'f'){
            $_POST['cpf'] = str_replace('.','', $_POST['cpf']);
            $_POST['cpf'] = str_replace('-','', $_POST['cpf']);
            $cliente->__set('cnpj', $_POST['cpf']);
        } elseif ($_POST['tipo'] == 'j') {
            $_POST['cpnj'] = str_replace('.','', $_POST['cpnj']);
            $_POST['cpnj'] = str_replace('-','', $_POST['cpnj']);
            $_POST['cpnj'] = str_replace('/','', $_POST['cpnj']);
            $cliente->__set('cnpj', $_POST['cnpj']);
        } elseif ($_POST['tipo'] == 'o') {
            $_POST['numberOutro'] = str_replace('.','', $_POST['numberOutro']);
            $_POST['numberOutro'] = str_replace('-','', $_POST['numberOutro']);
            $_POST['numberOutro'] = str_replace('/','', $_POST['numberOutro']);
            $cliente->__set('cnpj', $_POST['numberOutro']);
        }

        $conexao = new Conexao();
        $service = new ServiceCliente($conexao, $cliente);
        $service->inserir();

         header('location: controle_clientes.php?inclusao=1');

    } elseif ($acao == 'recuperar') {
        $cliente = new Cliente();
        $conexao = new Conexao();

        $service = new ServiceCliente ($conexao, $cliente);
        $cliente = $service->recuperar();

     } elseif ($acao == 'remover'){
        $cliente = new Cliente();
        $cliente->__set('cod_cliente',$_GET['c00_codigo']);
        $conexao = new Conexao();

        $service = new ServiceCliente ($conexao, $cliente);
  
        $service->remover(); 
        
        header('location: controle_clientes.php');
    }  elseif ($acao = 'atualizar') {
        $cliente = new Cliente();
        //if (empty($_POST['preco']) && empty($_POST['imposto']) && empty($_POST['id'])){ //Edita descrição
            $cliente->__set('cod_cliente',$_POST['cod']);
            $cliente->__set('nome',$_POST['nome']);   
            $conexao = new Conexao();
            $service = new ServiceCliente ($conexao, $cliente);
            
            $service->atualizarNome();

        if($service->atualizarNome()){
            header('location: controle_clientes.php');
        } else{
            echo '<br>';
        } 
   } 
     
?>