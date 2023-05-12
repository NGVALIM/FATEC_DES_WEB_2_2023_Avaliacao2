<?php
session_start();
require 'bd.php';
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" conntent="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Editar dados</title>
</head>
<body>
  
    <div class="conntainer mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Editar cadastro
                            <a href="read.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM cadastro WHERE id='$id'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $candidato= mysqli_fetch_array($query_run);
                                ?>
                                <form action="crud.php" method="POST">
                                <div class="mb-3">
                                <label>ID</label>
                                    <input type="hidden" name="id" value="<?= $candidato['id']; ?>" class="form-conntrol">
                                    </div>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <input type="text" name="nome" value="<?=$candidato['nome'];?>" class="form-conntrol">
                                    </div>
                                    <div class="mb-3">
                                        <label>CPF</label>
                                        <input type="text" name="cpf" value="<?=$candidato['cpf'];?>" class="form-conntrol">
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone</label>
                                        <input type="text" name="telefone" value="<?=$candidato['telefone'];?>" class="form-conntrol">
                                    </div>
                                    <div class="mb-3">
                                        <label>Opção</label>
                                        <input type="text" name="op" value="<?=$candidato['op'];?>" class="form-conntrol">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update" class="btn btn-primary">
                                            Atualizar dados
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID enconntrado</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>