<?php

    include("../Conexion/conexion.php");


    $Usuario=$_POST['Usuario'];
    $Contraseña=$_POST['Contraseña'];

    $n=0;

    $Consulta="SELECT * FROM usuario where usuario='$Usuario'";

    $Resultado=mysqli_query($conexion,$Consulta);

    while($fila=mysqli_fetch_array($Resultado)){

        if($Contraseña==$fila['Contraseña']){
            echo "Encontrado";
            $n=$n+1;
            header("Location: ../php/Inicio.php");
        } 
    }

    if($n==0){
        echo "No encontrado";
        header("Location: ../Index.html");
    }   

?>