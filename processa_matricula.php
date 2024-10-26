<?php 

      include 'conexao.php';

      $aluno = $_POST['escolha_aluno'];
      $curso = $_POST['escolha_curso'];;
      $numero = $_POST['numero'];
      $data = $_POST['data_matricula'];

      $insere_matricula = "INSERT INTO matricula(cod_aluno, cod_curso, numero_matricula, data_matricula)
                                          VALUES ($aluno, $curso, $numero, $data)";

      mysqli_query($conexao, $insere_matricula); 

      header('location: ver_matricula.php');
      
?>