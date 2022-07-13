<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem Vindo <?php $name = $_POST['name'];echo $name?></title>
    <link rel="stylesheet" href="../shared/css/indexstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
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

    <div class="container col-12">
        <?php
            if (isset($_POST['submit']))
            {
            ?>
            Olá <?php
                    if ($_POST['sex'] == 'M')
                    {
                        echo "amigo.";
                    }
                    else if ($_POST['sex'] == 'F')
                    {
                        echo "amiga.";
                    }
                    else if ($_POST['sex'] == '0')
                    {
                        echo "esquisito.";
                    }
                ?>
            <br>
            Sua mensagem é: <?php echo $_POST['message']; ?>
        <?php
            }
            ?>
    </div>
</body>
</html>