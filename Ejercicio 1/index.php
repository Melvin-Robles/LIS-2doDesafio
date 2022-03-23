<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>

<!-- Header con Bootstrap -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="assets/img/logo.png" width="35" height="35" class="d-inline-block align-top"  alt="logo">
    Desafio LIS UDB 
  </a>
</nav>

<body>
    
<!-- TABLA INGLES -->

<div id="tablas">
<table class="table table-striped">

<!-- Para crear un thead para 2 columnas -->
<colgroup span="2">

    <thead>
        
            <?php

                //Utilizando arrays asociativos
                $TituloIn = array(
                    "ingles" => "Ingles", 
                );

                foreach ($TituloIn as $Tituloin => $TituloinRecibido) {
                    echo '<th colspan="2">'.$TituloinRecibido.'</th>';
                  }

            ?>
    
    </thead>
    <tbody >
        <tr>
            <?php

             $InglesB = array(
                "basico" => "Básico", 
                "cantidad" => "25",
                
            );

            foreach ($InglesB as $Inb => $InbRecibido) {
                echo '<td>'.$InbRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $InglesInt = array(
                "intermedio" => "Intermedio", 
                "cantidad" => "15",
                
            );

            foreach ($InglesInt as $Int => $IntRecibido) {
                echo '<td>'.$IntRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $InglesAv = array(
                "avanzado" => "Avanzado", 
                "cantidad" => "15",
                
            );

            foreach ($InglesAv as $Av => $AvRecibido) {
                echo '<td>'.$AvRecibido.'</td>';
              }
            ?>
        </tr>

    </tbody>

</table>
</div>

<!-- TABLA FRANCES -->

<div id="tablas">
<table class="table table-striped">

<!-- Para crear un thead para 2 columnas -->
<colgroup span="2">

    <thead>
        
            <?php

                //Utilizando arrays asociativos
                $TituloFr = array(
                    "frances" => "Frances", 
                );

                foreach ($TituloFr as $Titulofr => $frRecibido) {
                    echo '<th colspan="2">'.$frRecibido.'</th>';
                  }

            ?>
    
    </thead>
    <tbody >
        <tr>
            <?php

             $francesB = array(
                "basico" => "Básico", 
                "cantidad" => "10",
                
            );

            foreach ($francesB as $Ba => $BaRecibido) {
                echo '<td>'.$BaRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $francesInt = array(
                "intermedio" => "Intermedio", 
                "cantidad" => "5",
                
            );

            foreach ($francesInt as $Int => $IntRecibido) {
                echo '<td>'.$IntRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $francesAv = array(
                "avanzado" => "Avanzado", 
                "cantidad" => "2",
                
            );

            foreach ($francesAv as $Av => $AvRecibido) {
                echo '<td>'.$AvRecibido.'</td>';
              }
            ?>
        </tr>

    </tbody>

</table>
</div>

<!-- TABLA MANDARIN -->

<div id="tablas">
<table class="table table-striped">

<!-- Para crear un thead para 2 columnas -->
<colgroup span="2">

    <thead>
        
            <?php

                //Utilizando arrays asociativos
                $TituloMan = array(
                    "frances" => "Mandarin", 
                );

                foreach ($TituloMan as $Tituloman => $manRecibido) {
                    echo '<th colspan="2">'.$manRecibido.'</th>';
                  }

            ?>
    
    </thead>
    <tbody >
        <tr>
            <?php

             $mandarinB = array(
                "basico" => "Básico", 
                "cantidad" => "8",
                
            );

            foreach ($mandarinB as $Ba => $BaRecibido) {
                echo '<td>'.$BaRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $mandarinInt = array(
                "intermedio" => "Intermedio", 
                "cantidad" => "4",
                
            );

            foreach ($mandarinInt as $Int => $IntRecibido) {
                echo '<td>'.$IntRecibido.'</td>';
              }
            ?>
        </tr>

        <tr>
            <?php

             $mandarinAv = array(
                "avanzado" => "Avanzado", 
                "cantidad" => "1",
                
            );

            foreach ($mandarinAv as $Av => $AvRecibido) {
                echo '<td>'.$AvRecibido.'</td>';
              }
            ?>
        </tr>

    </tbody>

</table>
</div>


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

