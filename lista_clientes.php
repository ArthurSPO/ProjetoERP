<?php
$acao = 'recuperar';
require 'cliente_controller.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilos.css">

    <title>Iquattro Sistemas</title>
    <link rel="icon" href="imagens/favicon.jpg">
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
                            <a href="controle_produtos.php" class="nav-link">Gerenciar Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_clientes.php" class="nav-link fw-bold">Listar Clientes</a>
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md-8 shadow-lg p-3 mb-5 bg-body rounded">
                <h1 class="text-center">Lista de Cliente ! </h1>

                <?php foreach ($cliente as $indice => $clientes) { ?>
                    <div class="card">
                        <div class="card-body p-4">
                            <h5 class="card-title"><?php echo $clientes->c00_nome ?> </h5>
                            <h6 class="card-subtitle mb-2 text-muted">Codigo do cliente: <?php echo $clientes->c00_codigo ?></h6>
                            <p class="card-text">Tipo de pessoa: <?php echo $clientes->tipo ?></p>
                            <p class="card-text">Nº CPF/CNP/Outros: <?php echo $clientes->c00_cnpj ?></p>
                            <p class="card-text">Estado: <?php echo $clientes->c00_estado ?></p>
                            <p class="card-text">Data Nascimento: <?php echo $clientes->c00_data_nascimento ?></p>
                            <p class="card-text">Produto Vinculado:</p>        
                        </div>
                    </div>
                <?php } ?>

            </div>
            <div class="col-md-2">

            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>