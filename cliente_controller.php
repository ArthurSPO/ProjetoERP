<?php 
    require "model.cliente.php";
    require "service_cliente.php";
    require "conexao.php";

    // $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;
    
    
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    echo "<br> Caimos no Cliente Controller <br>";

    // // echo empty($_POST['id']);
    // // echo empty($_POST['produto']);
    // // echo empty($_POST['cod']);
    // // echo empty($_POST['preco']);
    // // echo empty($_POST['imposto']);


    // if ($acao == 'inserir') {
    //     $produto = new Produto();
    //     $produto->__set('descricao',$_POST['produto']);
    //     $produto->__set('cod',$_POST['cod']);
    //     $produto->__set('preco',$_POST['preco']);
    //     $produto->__set('imposto',$_POST['imposto']);

    //     $conexao = new Conexao();
        
    //     $service = new Service($conexao, $produto);
    //     $service->inserir();

    //     header('location: controle_produtos.php?inclusao=1');

    // } elseif ($acao == 'recuperar') {
    //     $produto = new Produto();
    //     $conexao = new Conexao();

    //     $service = new Service ($conexao, $produto);
    //     $produtos = $service->recuperar();

    // } elseif ($acao == 'remover'){
    //     $produto = new Produto();
    //     $produto->__set('cod',$_GET['p00_codigo']);

    //     $conexao = new Conexao();

    //     $service = new Service ($conexao, $produto);
    //     $service->remover(); 
        
    //     header('location: controle_produtos.php');
    // } elseif ($acao = 'atualizar') {
    //     $produto = new Produto();
    //     if (empty($_POST['preco']) && empty($_POST['imposto']) && empty($_POST['id'])){ //Edita descrição
    //         $produto->__set('cod',$_POST['cod']);
    //         $produto->__set('descricao',$_POST['descricao']);   
    //         $conexao = new Conexao();
    //         $service = new Service ($conexao, $produto);
    //         $service->atualizarDescricao();

    //     if($service->atualizarDescricao()){
    //         header('location: controle_produtos.php');
    //     } else{
    //         echo '<br>';
    //     }
            
            
    //     } elseif(empty($_POST['descricao']) && empty($_POST['preco']) && empty($_POST['imposto'])){  // Edita Cod
    //         $produto->__set('id',$_POST['id']);
    //         $produto->__set('cod',$_POST['cod']);
    //         $conexao = new Conexao();
    //         $service = new Service ($conexao, $produto);
    //         $service->atualizarCod();

    //         if($service->atualizarCod()){
    //             header('location: controle_produtos.php');
    //         } else{
    //             echo '<br>';
    //         }
           
    //     } elseif (empty($_POST['descricao']) && empty($_POST['id']) && empty($_POST['imposto'])) { // Edita Preco
    //         $produto->__set('cod',$_POST['cod']);
    //         $produto->__set('preco',$_POST['preco']);
    //         $conexao = new Conexao();
    //         $service = new Service ($conexao, $produto);
    //         $service->atualizarPreco();

    //         if($service->atualizarPreco()){
    //             header('location: controle_produtos.php');
    //         } else{
    //             echo '<br>';
    //         }
            
    //     } elseif (empty($_POST['descricao']) && empty($_POST['preco']) && empty($_POST['id'])) {
    //         $produto->__set('cod',$_POST['cod']);
    //         $_POST['imposto'] = str_replace('%','',$_POST['imposto']); // Tratando %
    //         $produto->__set('imposto',$_POST['imposto']);
    //         $conexao = new Conexao();
    //         $service = new Service ($conexao, $produto);
    //         $service->atualizarImposto();
    //         if($service->atualizarImposto()){
    //             header('location: controle_produtos.php');
    //         } else{
    //             echo '<br>';
    //         }
    //     }
        
    //     $service = new Service ($conexao, $produto);


    // }
?>