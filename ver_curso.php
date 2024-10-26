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
            <h2 class="text-center mb-4">Lista de cursos</h2>
            <table class="table table-striped table-bordered table-hover">
                  <thead class="table-dark">
                        <tr>
                              <th>Nome</th>
                              <th>Descrição</th>
                              <th>Carga horária</th>
                              <th>Área</th>
                              <th>Ações</th>
                        </tr>
                  </thead>
                  <tbody>

                        <?php
                        include 'conexao.php';
                        $consulta_curso = "SELECT * FROM curso";
                        $consulta = mysqli_query($conexao, $consulta_curso);
                        while ($linha = mysqli_fetch_array($consulta)) {
                              echo '<tr><td>' . $linha['nome_curso'] . '</td>';
                              echo '<td>' . $linha['descricao'] . '</td>';
                              echo '<td>' . $linha['carga_horaria'] . '</td>';
                              echo '<td>' . $linha['area'] . '</td>';

                        ?>
                        <td class="d-flex ">
                              <div class="">
                                    <a class="mr-5" href="editar_curso.php?editar=<?php echo $linha['cod_curso']; ?>">
                                          <input type="submit" value="Editar curso" />
                                    </a>
                              </div>
                              <div>
                                    <a class="m-2"
                                          href="deletar_curso.php?cod_curso=<?php echo $linha['cod_curso']; ?>">
                                          <input type="submit" value="Deletar curso" />
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