<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <title>Inscrição do Aluno</title>
</head>
<body>
    <div class="container-fluid">
        <?php
            include 'navbar.php';
        ?>
        <div class="row">
            <div class="col-md-12">
                <div class="container mt-5">
                    <h2 class="text-center mb-4">Inscrição em Curso</h2>
                    <form method="post" action="">
                        <div class="mb-2">
                            <label class="form-label" for="nome">Nome:</label>
                            <?php 
                                require 'conectaBanco.php';
                                
                                $select = "SELECT nome FROM aluno WHERE nome = ''";
                                $resultado = mysqli_query($banco, $select);

                                if($resultado){
                                    while($linha = mysqli_fetch_assoc($resultado)){
                                        $nome = $linha['nome'];
        
                                        echo $nome;
                                    }
                                }


                                $banco->close();
                            ?>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="email">Email:</label>
                            <input class="form-control" type="email" id="email" placeholder="Digite seu email" required>
                        </div>
                        <div class="mb-2">
                            <label class="form-label" for="curso">Curso:</label>
                            <select class="form-control" id="curso">
                                <option value="1">Marketing Digital</option>
                                <option value="2">Gestão de Projetos</option>
                                <option value="3">Inglês Avançado</option>
                                <option value="4">Design de Moda</option>
                                <option value="5">Programação em Python</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Inscrever-se</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>