<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Cursos</title>
</head>
<body id="cursos">
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <h1 class="text-center">Cursos</h1>
        <div class="mb-3">
            <?php
                require 'conectaBanco.php';

                for($i = 0; $i < 6; $i++){

                $curso = "SELECT `Nome`, `Periodo`, `Descricao` FROM `curso` WHERE ID = $i";
                $resultado = mysqli_query($banco, $curso);

                if($resultado){
                    while($linha = mysqli_fetch_assoc($resultado)){
                        $nome = $linha['Nome'];
                        $periodo = $linha['Periodo'];
                        $desc = $linha['Descricao'];

                        echo "<h2>$nome ($periodo meses)</h2>";
                        echo $desc;
                    }
                }
            }
                $banco->close();
            ?>
        </div>
    </div>
</body>
</html>
