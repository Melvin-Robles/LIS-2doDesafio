<?php

    // debug var_dump($_POST['Nombre_Usuario']);
    foreach ($_POST['Nombre_Usuario'] as $name)
    {
        echo "<p>{$name}</p>";
    }

?>