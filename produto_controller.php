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
        $produto = $service->recuperar();

    }

?>