<!DOCTYPE HTML>
<html>
    <head>
     <meta charset= "utf-8">
     <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <form action=""  method="post">
    <!-- El usuario selecciona la cantidad de libros que insertará -->
    <label>Cantidad de libros a registrar: </label>
    <input type="number" name="cantidad" placeholder="Cantidad">
    <input type="submit" name="input" value="Generar">
    </form>

    <?php

    if (isset($_POST['input'])) {

        
        $cantidad = $_POST['cantidad'];

        for ($i=0;$i<$cantidad;$i++) { 
            ?>

        <form action="" method="post">
        
        <b>Ingrese Datos: </b> <br>
        <input type="text" name="apellido[]" placeholder="Apellido del autor"> <br>
        <input type="text" name="nombre[]" placeholder="Nombre del autor"> <br>
        <input type="text" name="tituloLibro[]" placeholder="Titulo del libro"> <br>
        <input type="text" name="numeroEdi[]" placeholder="Edición del libro"> <br>
        <input type="number" name="añoEdi[]" placeholder="Año de edición del libro"> <br>
        <input type="number" name="numPag[]" placeholder="Paginas del libro"> <br>
        <input type="text" name="notas[]" placeholder="Notas"> <br>
        <input type="text" name="isbn[]" placeholder="ISBN del libro"> <br>





          
 
          <?php   
        }

        ?>
        
        <br>
        <br>
        <input type="submit" name="registrar" value="Insertar">
<?php 

    }


?>
      
        </form>
    </body>
</html>

<?php

if (isset($_POST['registrar'])) {

echo "<br>";
echo "<br>";
$apellido = $_POST['apellido'];
$nombre = $_POST['nombre'];
$tituloLibro = $_POST['tituloLibro'];
$numeroEdi = $_POST['numeroEdi'];
$añoEdi = $_POST['añoEdi'];
$numPag = $_POST['numPag'];
$notas = $_POST['notas'];
$isbn = $_POST['isbn'];

//Expresiones regulares para el ISBN de 13 digitos
//Formato: ISBN:1234567890123
function get_isbn($str) {
    if (preg_match('/^ISBN:(\d{12}(?:\d|X))$/', $str, $matches)) {     
        return $matches[1];
    }
    else{
        echo '<script language="javascript">alert("ISBN INVALIDO Formato: ISBN:1234567890123");</script>';
        
    }
 }
 
 foreach ($isbn as $str) {
    $isbns = get_isbn($str);
   
 }


for ($i=0; $i < count($apellido); $i++) { 





 if (get_isbn($str)) {

    echo '<div class="tabla">';
    echo "Biblioteca UDB";
    echo "<br>";
    echo "<br>";
    echo "<b>Apellido: </b> $apellido[$i] <br>";
    echo "<b>Nombre: </b> $nombre[$i] <br>";
    echo "<b>Titulo del libro: </b> $tituloLibro[$i] <br>";
    echo "<b>Numero de Edición: </b> $numeroEdi[$i] <br>";
    echo "<b>Año de Edición: </b> $añoEdi[$i] <br>";
    echo "<b>Numero de paginas: </b> $numPag[$i] <br>";
    echo "<b>Notas: </b> $notas[$i] <br>";
    echo "<b>ISBN: </b> $isbn[$i] <br>";
    echo '</div>';
    

 }

}

}


?>


