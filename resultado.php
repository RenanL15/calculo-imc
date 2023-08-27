<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/result.css">
    <script src="assets/js/script.js"></script>
    <link rel="shortcut icon" href="assets/images/imc-icon.png" type="image/x-icon">
    <title>Resultado</title>
</head>
<body>
    <div class="container">

    <?php
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $result = round($weight / ($height * $height), 2);        
        switch ($result) {
            case ($result < 18.5):
                echo '<h1 style="color: #bb652c;">'.$result, '</h1>';
                echo '<p>Abaixo do peso</p>';
                break;
            case ($result < 25):
                echo '<h1 style="color: #46bda9;">'.$result, '</h1>';
                echo '<p>Peso Ideal</p>';
                break;
            case ($result < 30):
                echo '<h1 style="color: #ebcc42;">'.$result, '</h1>';
                echo '<p>Acima do peso</p>';
                break;
            case ($result < 35):
                echo '<h1 style="color: #eb8e42;">'.$result, '</h1>';
                echo '<p>Obesidade Grau I</p>';
                break;
            case ($result < 40):
                echo '<h1 style="color: #eb8e42;">'.$result, '</h1>';
                echo '<p>Obesidade Grau II</p>';
                break;
            default:
                echo '<h1 style="color: #e91515;">'.$result, '</h1>';
                echo '<p>Obesidade Grau III</p>';
            break;    
        }
    ?>
    <input type="button" value="Calcular novamente" onclick="testarNovamente()" id="btn-voltar">
    </div>
</body>
</html>