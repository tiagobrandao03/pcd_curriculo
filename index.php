<?php
global $pdo;
require "src/conexao-bd.php";
require "src/Modelo/Curriculo.php";
require "src/Repositorio/CurriculoRepositorio.php";

use Modelo\Curriculo;
use Repositorio\CurriculoRepositorio;

if (isset($_POST['cadastro'])){
    $dataString = $_POST['criado_em'];
    $data = new DateTime($_POST['criado_em']);

    $curriculo = new Curriculo(
        null,
        $_POST['nome'],
        $_POST['email'],
        $_POST['contato'],
        $_POST['idade'],
        $_POST['genero'],
        $_POST['raca'],
        $_POST['estado'],
        $_POST['cidade'],
        $_POST['deficiencia'],
        $_POST['cid'],
        $_POST['limitacao'],
        $_POST['laudo'],
        $_POST['cargo'],
        $_POST['interesse'],
        $_POST['formacao'],
        $_POST['expectativa_salarial'],
        $_POST['modelo_trabalho'],
        $_POST['regime_trabalho'],
        $_POST['preferencia_contato'],
        $_POST['redes_sociais'],
        $data
    );

    $curriculoRepositorio = new CurriculoRepositorio($pdo);
    $curriculoRepositorio->salvar($curriculo);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<ul class="container text-center" style="list-style-type: none;">
    <form method="post" action="">
    <li >
        <div class="row">
            <!--nome e email-->
            <div class="col">
                <label  for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="nome">
            </div>
            <div class="col">
                <label  class="form-label" for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email@email.com">
            </div>
        </div>
    </li>
    <li >
        <div class="row">
            <!--nome e email-->
            <div class="col">
                <label  class="form-label" for="contato">Contato</label>
                <input type="text" class="form-control" name="contato" id="contato" >
            </div>
            <div class="col">
                <label  class="form-label" for="idade">Idade</label>
                <input type="text" class="form-control" name="idade" id="idade" >
            </div>
            <div class="col">
                <label  class="form-label" for="genero">Genero </label>
                <input type="text" class="form-control" name="genero" id="genero" >
            </div>
            <div class="col">
                <label  class="form-label" for="raca">Raça</label>
                <input type="text" class="form-control" name="raca" id="raca" >
            </div>
        </div>
    </li>
    <li >
        <div class="row">
            <!--nome e email-->
            <div class="col">
                <label class="form-label" for="estado">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado">
            </div>
            <div class="col">
                <label  class="form-label" for="cidade">Cidade</label>
                <input type="text" class="form-control" name="cidade" id="cidade">
            </div>
            <div class="col">
                <label  class="form-label" for="deficiencia">Deficiencia</label>
                <input type="text" class="form-control" name="deficiencia" id="deficiencia" placeholder="Deficiencia">
            </div>
            <div class="col">
                <label  class="form-label" for="cid">Cid</label>
                <input type="text" class="form-control" name="cid" id="cid" placeholder="Cid">
            </div>
        </div>
    </li>
    <li><div class="row">
            <!--nome e email-->
            <div class="col">
                <label class="form-label" for="limitacao">Limitação</label>
                <input type="text" class="form-control" name="limitacao" id="limitacao" >
            </div>
            <div class="col">
                <label  class="form-label" for="laudo">Laudo Médico</label>
                <input type="text" class="form-control" name="laudo" id="laudo"  >
            </div>
            <div class="col">
                <label  class="form-label" for="cargo">Cargo</label>
                <input type="text" class="form-control" name="cargo" id="cargo"  >
            </div>
        </div>
    </li>
    <li>
        <div class="row">
            <!--nome e email-->
            <div class="col">
                <label  class="form-label" for="interesse">Interesse</label>
                <input type="text" class="form-control" name="interesse" id="interesse" >
            </div>
            <div class="col">
                <label  class="form-label" for="formacao">Formação</label>
                <input type="text" class="form-control" name="formacao" id="formacao" >
            </div>
        </div>
    </li>
    <li><div class="row">
            <!--nome e email-->
            <div class="col">
                <label  class="form-label" for="expectativa_salarial">Expectativa Salarial</label>
                <input type="text" class="form-control" name="expectativa_salarial" id="expectativa_salarial" >
            </div>
            <div class="col">
                <label  class="form-label" for="modelo_trabalho">Modelo de Trabalho</label>
                <input type="text" class="form-control" name="modelo_trabalho" id="modelo_trabalho" >
            </div>
            <div class="col">
                <label  class="form-label" for="regime_trabalho">Regime de Trabalho</label>
                <input type="text" class="form-control" name="regime_trabalho" id="regime_trabalho" >
            </div>
        </div>
    </li>


    <li>
       <!-- <div class="row">

            <div class="col">
                <label for="myfile">Anexar Currículo:</label>
                <input type="file" id="myfile" name="Anexar"><br><br>
            </div>
        </div>-->
    </li>
    <li>
        <div class="row">
            <div class="col">
                <label  class="form-label" for="preferencia_contato">Preferencia de Contato</label>
                <input type="name" class="form-control" name="preferencia_contato" id="preferencia_contato" >
            </div>
            <div class="col">
                <label  class="form-label" for="redes_sociais">Redes Sociais</label>
                <input type="Name" class="form-control" name="redes_sociais" id="redes_sociais" >
            </div>
        </div>
    </li>
    <li>
         <div class="col">
             <label for="criado_em">Criado em</label>
             <input type="datetime-local" id="criado_em" name="criado_em">

         </div>

 </li>
 <li><div class="row">
     <div class="col">
         <input name="cadastro" type="submit" placeholder="Enviar" value="cadastrarcurriculo">
     </div>
     </div>
 </li>
    </form>
</ul>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>