<?php

    // iniciar uma nova sessão
    session_start();

    // chamar nossa conexao
    require_once 'conexao.php';

    if(isset($_POST['bt_cadastrar'])) {
        // pegar os dados postados e fazer o escape
        $nome = mysqli_real_escape_string($con, $_POST['nome']);
        $nacionalidade = mysqli_real_escape_string($con, $_POST['nacionalidade']);
        $estado_civil = mysqli_real_escape_string($con, $_POST['estado_civil']);
        $idade = mysqli_real_escape_string($con, $_POST['idade']);
        $endereco = mysqli_real_escape_string($con, $_POST['endereco']);
        $celular = mysqli_real_escape_string($con, $_POST['celular']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $senha = md5(mysqli_real_escape_string($con, $_POST['senha']));

        // INSTRUÇÃO SQL
        $sql = "INSERT INTO usuarios (nome, nacionalidade, estado_civil, idade, endereco, celular, email, senha) VALUES ('$nome', '$nacionalidade', '$estado_civil', '$idade', '$endereco', '$celular', '$email', '$senha')";

        // EXECUTAR INSTRUCAO SQL E VERIFICAR SUCESSO
        if(mysqli_query($con, $sql)) {
            $_SESSION['mensagem'] = "Cadastro realizado com sucesso!";
            header('Location: ../index.php');
        } else {
            $_SESSION['mensagem'] = "Nãp foi possível cadastrar";
            header('Location: ../index.php');
        }
        // FECHAR CONEXAO
        mysqli_close($con);
    }