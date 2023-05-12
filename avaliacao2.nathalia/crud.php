<?php
session_start();
require 'bd.php';

if(isset($_POST['delete']))
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "DELETE FROM cadastro WHERE id = '$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)  
    {
        $_SESSION['message'] = "Candidato excluido com sucesso";
        header("Location: read.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Não foi possivel excluir o candidato";
        header("Location: read.php");
        exit(0);
    }
}

if(isset($_POST['update'])) 
{
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['nome']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $op = mysqli_real_escape_string($conn, $_POST['op']);
    $query = "UPDATE cadastro SET nome='$name', cpf='$cpf', telefone='$telefone', op='$op' WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Candidato atualizado com sucesso";
        header("Location: read.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Candidato não atualizado";
        header("Location: read.php");
        exit(0);
    }

}


if(isset($_POST['create']))
{
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $op = mysqli_real_escape_string($conn, $_POST['op']);

    $query = "INSERT INTO cadastro (nome,cpf,telefone,op) VALUES ('$nome','$cpf','$telefone','$op')";

    $query_run = mysqli_query($conn, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Candidato cadastrado com sucesso!";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Candidato não cadastrado";
        header("Location: create.php");
        exit(0);
    }
}

?>