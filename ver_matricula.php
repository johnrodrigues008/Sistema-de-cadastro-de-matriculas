<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lista de Alunos</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
      <div class="container mt-5">
            <h2 class="text-center mb-4">Lista de Matrículas</h2>
            <table class="table table-striped table-bordered table-hover">
                  <thead class="table-dark">
                        <tr>
                              <th>Nome do aluno</th>
                              <th>Nome do curso</th>
                              <th>Ações</th>
                        </tr>
                  </thead>
                  <tbody>

                        <?php
                        include 'conexao.php';
                        $consulta_matricula = "SELECT matricula.cod_matricula, aluno.nome_aluno, curso.nome_curso
                                          FROM aluno, curso, matricula
                                          WHERE matricula.cod_aluno = aluno.cod_aluno
                                          AND matricula.cod_curso = curso.cod_curso";

                        $consulta = mysqli_query($conexao, $consulta_matricula);
                        while ($linha = mysqli_fetch_array($consulta)) {
                              echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                              echo '<td>' . $linha['nome_curso'] . '</td>';

                        ?>
                        <td class="d-flex ">
                              <div>
                                    <a class="m-2"
                                          href="deletar_matricula.php?cod_matricula=<?php echo $linha['cod_matricula']; ?>">
                                          <input type="submit" value="Deletar matrícula" />
                                    </a>
                              </div>
                        </td>
                        </tr>
                        <?php
                        }
                        ?>

                  </tbody>
            </table>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
</body>

</html>