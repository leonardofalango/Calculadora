<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leonardo Falango | Página Inicial</title>
    <link rel="stylesheet" href="../shared/css/indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body class="body">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"><img src="../shared/icons/logo_transparent.png" alt="LF_logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            
            </div>
        </nav>
    </header>

    <center>
    <div class="container col-md-3 col-10 form">
        <form method="post" action="form.php">
            <div class="form-group col-12 mt-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Nome" required>
            </div>

            <div class="form-group col-12 mt-3">
                <label for="last_name">Sobrenome</label>
                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Sobrenome" required>
            </div>

            <div class="form-group col-12 mt-3">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" name="city" placeholder="Cidade" required>
            </div>

            <div class="form-group col-12 mt-3">
                <label for="message">Mensagem</label>
                <input type="text" class="form-control" name="message" placeholder="Mensagem" required>
            </div>

            
            <div class="form-group mt-3">
                <label for="sexo">Sexo</label>
                <select name="sex" id="sexo" required class="col-12 round" style="height: 2.3rem;">
                    <option value="" selected></option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="0">Outros</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success mt-3" name="submit">Concluído</button>

        </form>
    </div>
    </center>

</body>
</html>