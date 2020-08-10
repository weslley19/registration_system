<?php
    require 'config.php';
?>

<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/consultar.css">
    <title>Consultar Cadastro</title>
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
                        <a href="cadastro.php"><button type="button" class="btn btn-outline-light">Adicionar Cadastro</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--fim do cabeçalho-->
    
    <!--inicio do formulario de busca-->

    <div class="container">
        <section>
            <form method="POST">
                <form class="form-inline">
                    <h3>Pesquisar Cliente</h3>
                    <div class="form-group col-sm-4 mb-2">
                        <label for="InputText" class="sr-only">CPF</label>
                        <input type="text" class="form-control" placeholder="CPF">
                        <div class="button">
                            <button type="submit" class="btn btn-primary mb-2">Buscar</button>
                        </div>
                    </div>
                </form>
            </form>
        </section>
    </div>

    <!--fim da busca-->

    <!--inicio da tabel de usuarios-->

    <div class="container">
        <div class="table-responsive">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>CPF</th>
                        <th>TELEFONE</th>
                        <th>DATA DE CADASTRO</th>
                        <th style="text-align: center">AÇÕES</th>
                    </tr>
                </thead>
                <hr> 
                <h2>Clientes Cadastrados</h2>
                    <?php
                        $sql = "SELECT * FROM usuarios";
                        $sql = $pdo->query($sql);
                        if ($sql->rowCount() > 0){
                            foreach ($sql->fetchAll() as $usuarios){
                                echo '<tr>';
                                echo '<td>'.$usuarios['id'].'</td>';
                                echo '<td>'.$usuarios['nome'].'</td>';
                                echo '<td id="cpf">'.$usuarios['cpf'].'</td>';
                                echo '<td id="telefone">'.$usuarios['telefone'].'</td>';
                                echo '<td id="data_cadastro">'.$usuarios['data_cadastro'].'</td>';
                                echo '<td class="atualizar"><a href="editar.php?id='.$usuarios['id'].'"><button type="button" class="btn btn-success btn-sm">Atualizar</button></a>  <a href="excluir.php?id='.$usuarios['id'].'"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a></td>';
                                echo '</tr>';
                            }
                        } else {
                            echo 'Sem cadastros';
                        }
                    ?>
            </table>
        </div>
    </div>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>