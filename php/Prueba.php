<?php  
//Conexion con la base
include("../Conexion/conexion.php"); 

$Pelicula=$_POST['Pelicula'];

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Estilo-Busqueda.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--Trabajar con ajax-->
</head>
<body>
    
    <nav id="Menu">
        <ul id="Lista-Menu">

                <li id="Bar">
                    <i class="fa-solid fa-bars"></i>
                </li>

                <li id="Home">
                    <a href="../Index.html">
                        <i class="fa-solid fa-house"></i>
                    </a>
                </li>

                <div class="tooltip">
                    <a href="#">
                        <li>Peliculas</li>                    
                    </a> 

                    <span class="tooltiptext">

                        <ul>
                            <li> <a href="https://www.google.com/" target="_blank">Accion</a> </li>
                            <li> <a href="https://www.google.com/" target="_blank">Terror</a> </li>
                            <li> <a href="https://www.google.com/" target="_blank">Anime</a> </li>

                        </ul>

                    </span>

                </div>
                

                <a href="">
                    <li>Generos</li>
                </a>

                <a href="">
                    <li>Favoritos</li>
                </a>
                
                <a href="">
                    <li>Ayuda</li>
                </a>

                
                    
                <div class="Buscar">

                    <li>

                        <form action="Prueba.php" method="post" id="FormularioVoz">

                            <!----->
                            <div class="Barra">

                                <input type="text" id="input"  name="Pelicula" placeholder="Buscar" required value="<?php echo $Pelicula; ?>" >
                                
                                <div id="Micro">
                                    <i class="fa-solid fa-microphone"></i>
                                </div>
                                
                            </div>
                            <!----->
                            
                            

                            <button type="image" class="BotonBuscar">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>

                        </form>

                    </li>

                    
                    <li>
                        <div id="Inicio2"> 
                            <i class="fa-solid fa-user"></i>
                            
                        </div>
                    
                    </li>
                    
                </div>
                    


                

        </ul>
    </nav>

    <nav id="MenuLateral">
        
        <ul>


            <li  id="cerrar">
                <i class="fa-solid fa-rectangle-xmark"></i>
            </li>

            <li class="Opciones">
                <img src="../img/Logo.png" alt="" width="20%" height="80%">
            </li>

            <li class="Opciones">
                <a href="">Peliculas</a>
            </li>


            <li class="Opciones">
                <a href="">Series</a>
            </li>

            <li class="Opciones">
                <a href="">Novelas</a>
            </li>

            <li class="Opciones">
                <a href="">Documentales</a>
            </li>



        </ul>

    </nav>


    <div class="VentanaMicro">

        <div id="Cerrar">
            <i class="fa-sharp fa-solid fa-xmark"></i>
        </div>
        

        <div class="contenedor">
            <i class="fa-solid fa-microphone"></i>
            
        </div>

        <p id="Texto">Escuchando....</p>

    </div>



    <div class="VentanaSesion">
        
        <div class="LogoCine">
            <img src="../img/Logo.png" alt="" width="30%" height="100%">
        </div>


        <div class="VentanaLogeo">

            <div id="CerrarInicio">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </div>

            <h1>Iniciar Sesion</h1>

            <h4>Por favor ingresa tu usuario y contraseña</h4>

            <form action="../Funciones/VerificarUsuario.php" method="post">

            <input class="InputVentana" type="text" name="Usuario" placeholder="Usuario" required> <br>
            <input class="InputVentana" type="password" name="Contraseña"  placeholder="Contraseña" required>

            <button id="ButtonIniciar" type="submit">Ingresar</button>

            </form>

        </div>

    </div>

      
        
        <?php

        $consulta="SELECT * FROM pelicula where Nombre like '%$Pelicula%' or Genero like '%$Pelicula%';";

        $resultado=mysqli_query($conexion , $consulta);
    
        ?>

        <div id="Resultados">

        <?php
            while($fila=mysqli_fetch_array($resultado)){
            ?>

                <div class="Peliculas">

                    <form action="InfoPeli.php" method="post">
                    
                        <button type="submit" class="botonSubir">

                        <div class="Imagen">
                            
                                <img src="../img/Poster3.jpg" alt="" width="100%" height="15%">
                            
                        </div>
                        </button>
                        
                        <input type="hidden" value="<?php echo $fila['Nombre'];  ?>" name="NomPeli" readonly>

        

                        <div class="InfoPelicula">
                        
                            <p class="TituloPelicula"> <?php echo $fila['Nombre'];  ?> </p>
                            <p class="Genero" > <?php echo $fila['Genero'];  ?> </p>
                            
                        </div>


                       

                    </form>     

                </div>


            <?php

            }
        ?>

        </div>

    <div id="capa">

        a

    </div>
    
    <script src="https://kit.fontawesome.com/05dc881a1f.js" crossorigin="anonymous"></script>
    <script src="../js/jsPrueba.js"></script>   

    

</body>
</html>