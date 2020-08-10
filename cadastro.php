<?php
    require 'config.php';
    if (isset($_POST['nome']) && !empty($_POST['nome'])){
        $nome = addslashes($_POST['nome']);
        $cpf = addslashes($_POST['cpf']);
        $telefone = addslashes($_POST['telefone']);

        $sql = "INSERT INTO usuarios SET nome = '$nome', cpf = '$cpf', telefone = '$telefone', data_cadastro = now()";
        $sql = $pdo->query($sql);

        header('Location: cadastro.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <title>Cadastro de Clientes</title>
</head>
<body>

    <!--inicio do cabeçalho-->

    <header>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3>Nome do Sistema</h3>
                    </div>
                    <div class="col">
                        <a href="index.php"><button type="button" class="btn btn-outline-primary">Home</button></a>
                        <a href="consultar.php"><button type="button" class="btn btn-outline-light">Consultar</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--fim do cabeçalho-->

    <!--inicio do formulario-->

    <div class="container form">
    <h2>Cadastro de Clientes</h2>
        <form method="POST">
            <div class="form-row">
                <div class="form-group col-sm-8">
                    <label for="InputNome">Nome</label>
                    <input type="text" class="form-control" name="nome" placeholder="Nome do Cliente">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-sm-4">
                    <label for="InputText">CPF</label>
                    <input type="text" class="form-control" name="cpf" placeholder="CPF">
                </div>
                <div class="form-group col-sm-4">
                    <label for="InputText">Telefone</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Telefone">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <!--<a href="cadastro.php"><button type="button" class="btn btn-danger">Cancelar</button></a>-->
        </form>

        <!--fim do formulario-->

    </div>
    <footer class="footer_area">
        &copy; Todos os direitos reservados
        <p><small>Weslley Oliveira - 2019</small></p>
    </footer>
</body>
</html>