<?php 
      include 'conexao.php';
      $cod_curso = $_GET['cod_curso'];
      
      $deletar_curso = "DELETE FROM curso WHERE cod_curso = $cod_curso";

      mysqli_query($conexao, $deletar_curso);

      header('location:ver_curso.php');
?>