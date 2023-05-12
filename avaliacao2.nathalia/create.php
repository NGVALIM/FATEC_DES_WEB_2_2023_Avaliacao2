<?php
session_start();
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>VESTIBULAR</title>
</head>

<body>

    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card"> 
                <form action="crud.php" method="POST">
                    <div class="card-header">
                    <h4>Cadastrar Candidato
                            <input type="submit" class="btn btn-danger float-end" name='create' value="Cadastrar">
                        </h4>
                    </div>
                    <div class="card-body">
                            <div class="mb-3">
                                <label>Nome</label>
                                <input type="text" name="nome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>CPF</label>
                                <input type="text" name="cpf" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Telefone</label>
                                <input type="text" name="telefone" class="form-control">
                            </div>
                            <div class="col-sm-4 form-group">
                                <label>Estudou em escola pública?</label>
                                <select required name="op" required class="form-control" id="op">
                                    <option value="escolhaopcao">Selecione</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                            <div class="card-header">
                        
                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>