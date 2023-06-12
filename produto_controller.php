<?php 
    require "model.produto.php";
    require "service.php";
    require "conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    


    if ($acao == 'inserir') {
        $produto = new Produto();
        $produto->__set('descricao',$_POST['produto']);
        $produto->__set('cod',$_POST['cod']);
        $produto->__set('preco',$_POST['preco']);
        $produto->__set('imposto',$_POST['imposto']);

        $conexao = new Conexao();
        
        $service = new Service($conexao, $produto);
        $service->inserir();

        header('location: controle_produtos.php?inclusao=1');

    } elseif ($acao == 'recuperar') {
        $produto = new Produto();
        $conexao = new Conexao();

        $service = new Service ($conexao, $produto);
        $produtos = $service->recuperar();

    } elseif ($acao == 'remover'){
        $produto = new Produto();
        $produto->__set('cod',$_GET['p00_codigo']);

        $conexao = new Conexao();

        $service = new Service ($conexao, $produto);
        $service->remover(); 
        
        header('location: controle_produtos.php');
    } elseif ($acao = 'atualizar') {
        $produto = new Produto();
        $produto->__set('descricao',$_POST['descricao']);
        $produto->__set('cod', $_POST['cod']);

        $conexao = new Conexao();

        $service = new Service ($conexao, $produto);

        if($service->atualizar()){
            header('location: controle_produtos.php');
        } else{
            //poderia tratar erro
        }

    

    }

?>