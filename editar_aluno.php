<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
      <?php
      include 'conexao.php';
      $consulta_aluno = "SELECT * FROM aluno";
      $consulta = mysqli_query($conexao, $consulta_aluno);
      while ($linha = mysqli_fetch_array($consulta)) {
            if ($linha['cod_aluno'] == $_GET['editar']) {
      ?>

      <div class="text-center mt-5 container p-5 d-flex justify-content-center ">
            <div class="card w-50 bg-dark-subtle text-dark-emphasis">
                  <h2 class="mt-3">Editar aluno</h2>
                  <form method="post" action="processa_edicao.php"
                        class="d-flex flex-column align-items-center mb-3 px-5">
                        <input type="hidden" name="cod_aluno" value="<?php echo $linha['cod_aluno']; ?>">

                        <div class="mb-1 w-100">
                              <label class="d-flex mb-1 mt-3" for="name">Nome Completo:</label>
                              <input type="text" class="form-control" id="name" name="nome_aluno"
                                    value="<?php echo $linha['nome_aluno']; ?>">
                        </div>

                        <div class="mb-1 w-100">
                              <label class="d-flex mt-3" for="age">Idade:</label>
                              <input type="age" class="form-control" id="age" name="idade"
                                    value="<?php echo $linha['idade']; ?>">
                              <!-- is-invalid -->
                              <!-- <div class="invalid-feedback">Este e-mail não é válido</div> -->
                        </div>

                        <div class="mb-1 w-100">
                              <label class="d-flex mt-3" for="cpf">CPF:</label>
                              <input type="text" class="form-control" id="cpf" name="cpf"
                                    value="<?php echo $linha['cpf']; ?>">
                        </div>

                        <div class="mb-1 w-100">
                              <label class="d-flex mt-3" for="escolaridade">Escolaridade:</label>
                              <input type="text" class="form-control" id="escolaridade" name="escolaridade"
                                    value="<?php echo $linha['escolaridade']; ?>">
                        </div>

                        <div class="d-flex justify-content-between w-100 mt-5">
                              <button type="button" class="btn btn-outline-primary w-40 mr-3">Cancelar</button>
                              <button type="submit" class="btn btn-primary w-50">Editar aluno</button>
                        </div>
                  </form>
            </div>
      </div>

      <?php }
      } ?>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
      </script>
</body>

</html>