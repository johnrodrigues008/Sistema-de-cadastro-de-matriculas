<?php

      include 'conexao.php';

      $nome_curso = $_POST['nome_curso'];
      $carga_horaria = $_POST['carga_horaria'];
      $descricao = $_POST['descricao'];
      $area = $_POST['area'];
      
      $insere_curso = "INSERT INTO curso(nome_curso, descricao, carga_horaria, area) VALUES ('$nome_curso', '$descricao', '$carga_horaria', '$area')";
      
      mysqli_query($conexao, $insere_curso);

      header('location: ver_curso.php')
?>