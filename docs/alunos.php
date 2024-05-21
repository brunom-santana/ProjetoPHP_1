<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Alunos</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <h2 class="text-center">Login do aluno</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <?php 
                    require 'conectaBanco.php';
                    $select = "SELECT a.nome, c.nome FROM aluno AS a JOIN Inscricoes AS i ON a.id = i.fk_Aluno_ID JOIN curso AS c ON c.id = i.fk_Curso_ID;";
                    $resultado = mysqli_query($banco, $select);
                ?>
                <table class="table table-hover">
                    <thead>
                        <th scope="col">Nome</th>
                        <th scope="col">Curso</th>
                    </thead>
                    <tbody>
                        <?php 
                        if($resultado){
                            while($linha = mysqli_fetch_assoc($resultado)){
                                $nome = $linha['nome'];
                                $curso = $linha['nome'];

                                echo "<tr>
                                <td>$nome</td>
                                <td>$curso</td>
                                </tr>";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>
</html>