<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/EstiloInicio.css">
</head>
<body class="hidden" onload="miFuncion();">
    

        <div class="centrado" id="cargado">
            <div class="lds-facebook">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>

        

        <nav id="Menu">
            <ul id="Lista-Menu">

                <a href="../index.html">
                    <li>
                        <i class="fa-solid fa-right-to-bracket"></i>
                    </li>
                </a>

                <a href="">
                    <li>
                        <i class="fa-solid fa-user"></i>   Perfil 
                    </li>
                </a>

                <a href="">
                    <li>
                        <i class="fa-solid fa-bell"></i>
                        
                    </li>
                </a>

                <a href="">
                    <li>
                        <i class="fa-solid fa-circle-info"></i>
                        
                    </li>
                </a>

            </ul>
        </nav>

        <nav id="MenuLateral">

            
            <ul id="ListaBar">

                <li id="Logo">
                    <img src="../img/Logo3.png" alt="" width="40px" height="40px">
                </li>

                <li id="btnBar">
                    <i class="fa-solid fa-bars"></i>
                </li>
            </ul>


            <ul id="rellenar">

                <a href="#" id="btnDash">
                    <li class="opciones">
                        <ul class="alinear">

                            <li><i class="fa-solid fa-house"></i></li>
                            <li class="Texto">Dashboard</li>

                        </ul>
                    </li>
                </a>


                <a href="#" id="btnGestion">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-pen-to-square"></i></li>
                            <li class="Texto">Gestion</li>
                        </ul>
                    </li>
                </a>

                <a href="#" id="btnAjustes">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-gear"></i></li>
                            <li class="Texto">Ajustes</li>
                        </ul>
                    </li>
                </a>

                <a href="#" id="btnBugs">
                    <li class="opciones">
                        <ul class="alinear">

                            
                            <li><i class="fa-solid fa-bug"></i></li>
                            <li class="Texto">Bugs</li>
                        </ul>
                    </li>
                </a>

                

                </div>


            </ul>

        </nav>

    <div id="Contenido" style="visibility:hidden;">

        <div id="Bienvenida">

            <p id="TxtBienvenida">Bienvenido Usuario Erick!</p>
            <p id="Saludo">Soy el sistema de Gestion de CineXD y te ayudare a gestionar y analizar la informacion mas relevante</p> 

            <button id="btnComenzar">Comenzemos!</button>



        </div>



        <div id="Gestion">

            <ul>
                <li>
                    <p>Gestionar Peliculas</p>
                </li>
                
                <li>
                    <button id="add">Añadir</button>
                </li>
                


            </ul>


        </div>


        
        <div id="Ajustes">

            <p>Ajustes</p>


        </div>

        <div id="Bugs">

            <p>Bugs</p>


        </div>

    </div>





    



    <script src="../js/jsInicio.js"></script>


    <script src="https://kit.fontawesome.com/05dc881a1f.js" crossorigin="anonymous"></script>
</body>
</html>