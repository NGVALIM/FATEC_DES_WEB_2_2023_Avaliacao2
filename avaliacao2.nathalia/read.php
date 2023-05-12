<?php
    session_start();
    require 'bd.php';
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Listar</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Detalhes do candidato
                            <a href="create.php" class="btn btn-primary float-end">Adicionar candidato</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>CPF</th>
                                    <th>Telefone</th>
                                    <th>Escola pública</th>
                                    <th>Ação</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 

$query = "SELECT * FROM cadastro";
$query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $cadastro)
                                        {
                                           
                                            ?>
                                            <tr>
                                                <td><?= $cadastro['id']; ?></td>
                                                <td><?= $cadastro['nome']; ?></td>
                                                <td><?= $cadastro['cpf']; ?></td>
                                                <td><?= $cadastro['telefone']; ?></td>
                                                <td><?php if($cadastro['op']=='1'){
                                                echo 'sim';
                                            }else{
                                                echo 'não';
                                            } ?></td>
                                                <td>
                                                    <a href="info.php?id=<?= $cadastro['id']; ?>" class="btn btn-info btn-sm">Visualizar</a>
                                                    <a href="update.php?id=<?= $cadastro['id']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="crud.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete" name="<?=$cadastro['id'];?>" class="btn btn-danger btn-sm">Deletar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> Nenhum candidato cadastrado </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>