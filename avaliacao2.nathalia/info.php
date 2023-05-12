<?php
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

    <title>Detalhes do Candidato</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados do Candidato
                            <a href="read.php" class="btn btn-danger float-end">VOLTAR</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $candidato_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM cadastro WHERE id='$candidato_id'";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $candidato = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <p class="form-control">
                                            <?=$candidato['nome'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>CPF</label>
                                        <p class="form-control">
                                            <?=$candidato['cpf'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Telefone</label>
                                        <p class="form-control">
                                            <?=$candidato['telefone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>OPÇÃO</label>
                                        <p class="form-control">
                                            <?=$candidato['op'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>Nenhum ID encontrado</h4>";
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