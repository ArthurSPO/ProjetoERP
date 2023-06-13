<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>

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
                            <a href="lista_clientes.php" class="nav-link">Listar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="controle_clientes.php" class="nav-link fw-bold">Gerenciar Clientes</a>
                        </li>
                        <li class="nav-item">
                            <a href="lista_total.php" class="nav-link">Produtos e Clientes</a>
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
                <h1 class="text-center">Gerenciamento de Clientes ! </h1>
                <h4>Adicionar Cliente:</h4>
                <form action="cliente_controller.php?acao=inserir" method="post">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Nome do cliente</label>
                                <input type="text" class="form-control" placeholder="Exemplo: Arthur Pontes" name="nome">
                                <label for="">Código do cliente</label>
                                <input type="text" class="form-control" placeholder="Exemplo: 3524" name="cod">
                                <label for="">Estado</label>
                                <input type="text" class="form-control" placeholder="Exemplo: SP" name="estado">
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="">Tipo de Pessoa:</label>
                                    <select id="tipo" name="tipo">
                                        <option value="f">Fisica</option>
                                        <option value="j">Juridica</option>
                                        <option value="o">Outros</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="">Insira CNPJ: </label>
                                    <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00000000/0000-00">
                                </div>
                                <div>
                                    <label>Insira CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000000000-00">
                                </div>
                                <div>
                                    <label>Insira numeros do meio de identificação:</label>
                                    <input type="text" class="form-control" id="outro" name="numberOutro" placeholder="0000">
                                </div>
                                <label for="">Data de nascimento</label>
                                <input type="date" class="form-control" name="data">
                            </div>
                        </div>
                    </div>
                    <br>

                    <button class="btn btn-success p-2">Cadastrar</button>
                </form>
                <br><br>
            </div>
            <div class="col-md-2">

            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $("#cpf").closest("div").show();
            $("#cnpj").closest("div").hide();
            $("#outro").closest("div").hide();
            $("#tipo").on("change", function() {
                var v = $(this).val();
                if (v == "f") {
                    $("#cnpj").closest("div").hide();
                    $("#cpf").closest("div").show();
                    $("#outro").closest("div").hide();
                } else if (v == "j") {
                    $("#cnpj").closest("div").show();
                    $("#cpf").closest("div").hide();
                    $("#outro").closest("div").hide();
                } else if (v == "o") {
                    $("#cnpj").closest("div").hide();
                    $("#cpf").closest("div").hide();
                    $("#outro").closest("div").show();
                }
            });
        });

        var cpf = document.querySelector("#cpf");

        cpf.addEventListener("blur", function() {
            if (cpf.value) cpf.value = cpf.value.match(/.{1,3}/g).join(".").replace(/\.(?=[^.]*$)/, "-");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>