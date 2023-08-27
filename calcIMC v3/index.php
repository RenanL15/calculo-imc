<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <title>Cálculo IMC</title>
</head>

<body>

  
  <!-- Formulário -->
  
  <form action="resultado.php" method="post">
    <div class="form-container">
      <h1>Calcule o IMC</h1>
      <img src="assets/images/bmi-dial.png" alt="imc-logo" width="250px" id="imc-logo">
      <input type="text" name="name" placeholder="Nome" required />
      <input type="text" name="height" placeholder="Altura" required />
      <input type="text" name="weight" placeholder="Peso" required />
      <div class="label-container">
      <label for="maleRadio">
        <input type="radio" name="sex" value="male" id="maleRadio" required/>
        Masculino
      </label>
      <i class="gg-gender-male"></i>
      <label for="femaleRadio">
        <input type="radio" name="sex" value="female" id="femaleRadio" required/>
        Feminino
      </label>
      <i class="gg-gender-female"></i>
      </div>
      <input type="submit" value="Calcular" id="btn-submit" />
    </div>
  </form>
</body>

</html>