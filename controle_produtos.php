<?php
$acao = 'recuperar';
require 'produto_controller.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>Iquattro Sistemas</title>
    <link rel="icon" href="imagens/favicon.jpg">

    <script>
        function remover(cod) {
            location.href = 'controle_produtos.php?acao=remover&p00_codigo=' + cod;

        }

        function editarDescricao(cod, texto) {
            let form = document.createElement('form')
            form.action = 'produto_controller.php?acao=atualizar'
            form.method = 'post'
            // form.className = 'w-75'

            let input = document.createElement('input')
            input.type = 'text'
            input.name = 'descricao'
            input.className = 'form-control'
            input.value = texto

            let inputCod = document.createElement('input')
            inputCod.type = 'hidden'
            inputCod.name = 'cod'
            inputCod.value = cod

            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'btn btn-info'
            button.innerHTML = 'Atualizar'


            form.appendChild(input)
            form.appendChild(button)
            form.appendChild(inputCod)

            console.log(form)

            let produto = document.getElementById('produto_' + cod);

            produto.innerHTML = ''

            produto.insertBefore(form, produto[0])
        }

        function editarCod(id, cod) {
            let form = document.createElement('form')
            form.action = 'produto_controller.php?acao=atualizar'
            form.method = 'post'

            let input = document.createElement('input')
            input.type = 'text'
            input.name = 'cod'
            input.className = 'form-control'
            input.value = cod

            let inputCod = document.createElement('input')
            inputCod.type = 'hidden'
            inputCod.name = 'id'
            inputCod.value = id

            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'btn btn-info'
            button.innerHTML = 'Atualizar'


            form.appendChild(input)
            form.appendChild(button)
            form.appendChild(inputCod)

            console.log(form)

            let produto = document.getElementById('produto_' + cod);

            produto.innerHTML = ''

            produto.insertBefore(form, produto[0])
        }

        function editarPreco(cod, preco) {
            let form = document.createElement('form')
            form.action = 'produto_controller.php?acao=atualizar'
            form.method = 'post'

            let input = document.createElement('input')
            input.type = 'text'
            input.name = 'preco'
            input.className = 'form-control'
            input.value = preco

            let inputCod = document.createElement('input')
            inputCod.type = 'hidden'
            inputCod.name = 'cod'
            inputCod.value = cod

            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'btn btn-info'
            button.innerHTML = 'Atualizar'


            form.appendChild(input)
            form.appendChild(button)
            form.appendChild(inputCod)

            console.log(form)

            let produto = document.getElementById('produto_' + cod);

            produto.innerHTML = ''

            produto.insertBefore(form, produto[0])
        }

        function editarImposto(cod, imposto) {
            let form = document.createElement('form')
            form.action = 'produto_controller.php?acao=atualizar'
            form.method = 'post'

            let input = document.createElement('input')
            input.type = 'text'
            input.name = 'imposto'
            input.className = 'form-control'
            input.value = imposto + '%'

            let inputCod = document.createElement('input')
            inputCod.type = 'hidden'
            inputCod.name = 'cod'
            inputCod.value = cod

            let button = document.createElement('button')
            button.type = 'submit'
            button.className = 'btn btn-info'
            button.innerHTML = 'Atualizar'


            form.appendChild(input)
            form.appendChild(button)
            form.appendChild(inputCod)

            console.log(form)

            let produto = document.getElementById('produto_' + cod)

            produto.innerHTML = ''

            produto.insertBefore(form, produto[0])
        }

    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg-secondary">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">
                    <img src="img/logo.png" width="180px">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav" aria-controls="nav" aria-label="Toggle navigation" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="nav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_produtos.php" class="nav-link">Listar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="controle_produtos.php" class="nav-link fw-bold">Gerenciar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_clientes.php" class="nav-link">Listar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="controle_clientes.php" class="nav-link">Gerenciar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_total.php" class="nav-link text-center">Produtos e Clientes</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>

    <?php if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
        <div class="bg-success">
            <h4 class="text-white text-center p-2">Inclusão feita com sucesso</h4>
        </div>
    <?php   } ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="text-center">Gerenciamento de Produtos ! </h1>
                <h4>Adicionar Produto:</h4>
                <form action="produto_controller.php?acao=inserir" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Descrição</label>
                                <input type="text" class="form-control" placeholder="Exemplo: Motor Honda V12" name="produto">
                                <label for="">Preço</label>
                                <input type="text" class="form-control" placeholder="Exemplo: 200.00 (APENAS NÚMEROS)" name="preco">
                            </div>
                            <div class="col-md-6">
                                <label for="">Código do produto</label>
                                <input type="text" class="form-control" placeholder="Exemplo: 0359" name="cod">
                                <label for="">Imposto</label>
                                <input type="text" class="form-control" placeholder="Exemplo: 10" name="imposto">
                            </div>
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-success p-2">Cadastrar</button>
                </form>
                <br><br>

                <h4>Visualizar / Alterar / Excluir Produtos:</h4>

                <?php foreach ($produtos as $indice => $produto) { ?>
                    <div class="card">
                        <div class="card-body p-4" id="produto_<?= $produto->p00_codigo ?>">
                            <h5 class="card-title"><?php echo $produto->p00_descricao  ?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Codigo do produto: <?php echo $produto->p00_codigo ?></h6>
                            <p class="card-text">Preço do produto: <?php echo $produto->p00_preco ?></p>
                            <p class="card-text">Imposto: <?php echo $produto->p00_imposto ?>%</p>
                            <p class="card-text">Cliente Vinculado: <?= $produto->c00_nome ?> (<?=$produto->p00_lig?>)</p>

                            <button class="btn btn-danger" onclick="remover(<?= $produto->p00_codigo ?>)">Excluir</button>
                            <button class="btn btn-info" onclick="editarDescricao(<?= $produto->p00_codigo ?>, '<?= $produto->p00_descricao ?>')">Editar Produto</button>
                            <button class="btn btn-info" onclick="editarCod(<?= $produto->p00_codigo ?>, <?= $produto->p00_codigo ?>)">Editar Código</button>
                            <button class="btn btn-info" onclick="editarPreco(<?= $produto->p00_codigo ?>, <?= $produto->p00_preco ?>)">Editar Preço</button>
                            <button class="btn btn-info" onclick="editarImposto(<?= $produto->p00_codigo ?>, <?= $produto->p00_imposto ?>)">Editar Imposto</button>
                            <p class="card-text"></p>
                            <p class="card-text">Vincular Cliente:</p>
                            <form action="produto_controller.php?acao=recuperarLig" method="post">
                            <select name="lig" id="">
                            <?php $controle = false; ?>
                            <?php foreach ($_SESSION['cliente'] as $key => $clientes) {           
                                if ($controle == false){ ?>       
                                <option value="">Vazio</option>
                                <?php $controle = true;
                                } ?>
                                <option name="lig" value="<?=$clientes->c00_codigo?>"><?php echo $clientes->c00_codigo ?></option>    
                             <?php } ?>
                             <input type="hidden" name="cod_prod" value="<?= $produto->p00_codigo ?>">                                
                            </select>
                            <button class="btn btn-warning">Vincular</button>
                            </form>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="col-md-2">

    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>