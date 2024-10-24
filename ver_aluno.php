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
            <h2 class="text-center mb-4">Lista de Alunos</h2>
            <table class="table table-striped table-bordered table-hover">
                  <thead class="table-dark">
                        <tr>
                              <th>Nome</th>
                              <th>Idade</th>
                              <th>CPF</th>
                              <th>Escolaridade</th>
                              <th>Ações</th>
                        </tr>
                  </thead>
                  <tbody>

                        <?php
                        include 'conexao.php';
                        $consulta_aluno = "SELECT * FROM aluno";
                        $consulta = mysqli_query($conexao, $consulta_aluno);
                        while ($linha = mysqli_fetch_array($consulta)) {
                              echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                              echo '<td>' . $linha['idade'] . '</td>';
                              echo '<td>' . $linha['cpf'] . '</td>';
                              echo '<td>' . $linha['escolaridade'] . '</td>';

                        ?>
                        <td class="d-flex ">
                              <div class="">
                                    <a class="mr-5" href="editar_aluno.php?editar=<?php echo $linha['cod_aluno']; ?>">
                                          <input type="submit" value="Editar aluno" />
                                    </a>
                              </div>
                              <div>
                                    <a class="m-2"
                                          href="deletar_aluno.php?cod_aluno=<?php echo $linha['cod_aluno']; ?>">
                                          <input type="submit" value="Deletar aluno" />
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