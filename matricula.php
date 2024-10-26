<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Matricula</title>


      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
      <div class="text-center mt-5 container p-5 d-flex justify-content-center ">
            <div class="card w-50 bg-dark-subtle text-dark-emphasis">
                  <h2 class="mt-3">Cadastro de cursos</h2>
                  <form method="post" action="processa_matricula.php"
                        class="d-flex flex-column align-items-center mb-3 px-5">

                        <div class="mb-1 w-100 mb-3">
                              <label class="d-flex mt-3" for="escolha_aluno">Escolha um aluno:</label>

                              <select class="form-select" id="escolha_aluno" name="escolha_aluno"
                                    aria-label="Default select example">
                                    <option selected>Selecione o aluno </option>

                                    <?php
                                    include 'conexao.php';
                                    $consulta = "SELECT * FROM aluno";
                                    $consulta_aluno = mysqli_query($conexao, $consulta);

                                    while ($linha = mysqli_fetch_array($consulta_aluno)) {

                                          echo '<option value = "' . $linha['cod_aluno'] . '">' .
                                                $linha['nome_aluno'] .

                                                '</option>';
                                    };

                                    ?>
                              </select>

                        </div>

                        <div class="mb-1 w-100 mb-3">
                              <label class="d-flex" for="escolha_curso">Escolha um curso:</label>


                              <select class="form-select" id="escolha_curso" name="escolha_curso"
                                    aria-label="Default select example">
                                    <option selected>Selecione o curso</option>

                                    <?php
                                    include 'conexao.php';
                                    $consulta = "SELECT * FROM curso";
                                    $consulta_curso = mysqli_query($conexao, $consulta);

                                    while ($linha = mysqli_fetch_array($consulta_curso)) {

                                          echo '<option value = "' . $linha['cod_curso'] . '">' .
                                                $linha['nome_curso'] .

                                                '</option>';
                                    };

                                    ?>
                              </select>

                        </div>
                        <div class="mb-1 w-100 mb-3">
                              <label class="d-flex" for="data_matricula">Data da matrícula:</label>

                              <input type="text" class="form-control" id="" name="data_matricula"
                                    placeholder="Digite uma data">
                        </div>

                        <div class="mb-1 w-100">
                              <label class="d-flex" for="numero">Numero da matrícula:</label>

                              <input type="number" class="form-control" id="numero" name="numero"
                                    placeholder="Digite um número de matrícula">
                        </div>

                        <div class="d-flex justify-content-between w-100 mt-5">
                              <a href="index.html" class="btn btn-outline-primary w-40 mr-3">Cancelar</a>
                              <button type="submit" class="btn btn-primary w-50">Cadastrar matricula</button>
                        </div>
                  </form>
            </div>
      </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
</body>

</html>