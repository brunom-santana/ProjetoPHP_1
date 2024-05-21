<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Cadastro do aluno</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <h2 class="text-center mt-3">Cadastro do aluno</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <?php 
                require 'conectaBanco.php';
                $usuario = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];


                $sql = "INSERT INTO aluno(nome, email, senha) VALUES ('$usuario','$email','$senha')";
                $banco->query($sql);
                if($banco->affected_rows >= 1){
                    echo "<p>Usuario $usuario cadastrado com sucesso</p>";
                }else{
                    echo "Deu certo não parceiro";
                }

                $banco->close();
        ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>