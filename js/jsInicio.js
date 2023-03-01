
abierto=true;
var BotonBar=document.getElementById('btnBar');
var Menu=document.getElementById('MenuLateral')
Info=document.getElementsByClassName('Texto');
alinear=document.getElementsByClassName('alinear');

BotonBar.addEventListener('click',AbrirMenu);

Contenido=document.getElementById('Contenido');

Dash=document.getElementById('btnDash');
Gestion=document.getElementById('btnGestion');
Ajustes=document.getElementById('btnAjustes');
Bugs=document.getElementById('btnBugs');

CuadroBienvenida=document.getElementById('Bienvenida');
CuadroGestion=document.getElementById('Gestion');
CuadroAjustes=document.getElementById('Ajustes');
CuadroBugs=document.getElementById('Bugs');


Gestion.addEventListener('click',CambiarGestion);
Dash.addEventListener('click',CambiarDash);
Ajustes.addEventListener('click',CambiarAjustes);
Bugs.addEventListener('click',CambiarBugs);


function CambiarBugs(){

    CuadroBugs.style.display="block";
    CuadroBugs.style.opacity="1";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

}


function CambiarAjustes(){

    CuadroAjustes.style.display="block";
    CuadroAjustes.style.opacity="1";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";

}

function CambiarGestion(){

    CuadroGestion.style.display="block";
    CuadroGestion.style.opacity="1";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";
}

function CambiarDash(){

    CuadroBienvenida.style.display="block";
    CuadroBienvenida.style.opacity="1";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";
}



var n=0;

function miFuncion(){

    setTimeout(CerrarPreload, 2000);

}

function CerrarPreload(){

   
    cargado=document.getElementById('cargado');
    cargado.style.opacity="0";
    cargado.style.display="none";
    document.body.classList.remove('hidden');


    Contenido.style.visibility="visible";

}


function AbrirMenu(){

    if(n==0){
        Menu.style.width="4%";

        
        var longitud=Info.length;

        for(i=0;i<longitud;i++){
            
            Info[i].style.display="inline-block";
            Info[i].style.opacity="0";

        }


        var longitud2=alinear.length;

        for(i=0;i<longitud2;i++){    
            alinear[i].style.paddingLeft="25%";
        }

        BotonBar.style.transform=" translateY(-120%)";
        BotonBar.style.opacity="0";


        
        CuadroBienvenida.style.left="7%";
        CuadroBienvenida.style.width="90%";

        CuadroGestion.style.left="9%";
        CuadroGestion.style.width="90%";

        CuadroAjustes.style.left="9%";
        CuadroAjustes.style.width="90%";
        
        CuadroBugs.style.left="9%";
        CuadroBugs.style.width="90%";
        
        n=1;

        abierto=false;

        //alert(abierto);
        return abierto;
    }
    
    if(n==1){
        Menu.style.width="15%";
        
        var longitud=Info.length;

        for(i=0;i<longitud;i++){
            
            Info[i].style.display="inline-block";
            Info[i].style.opacity="1";

        }

        var longitud2=alinear.length;

        for(i=0;i<longitud2;i++){    
            alinear[i].style.paddingLeft="15%";
        }

        BotonBar.style.transform=" translateY(-3%)";
        BotonBar.style.opacity="1";

        CuadroBienvenida.style.left="17%";
        CuadroBienvenida.style.width="80%";


        CuadroGestion.style.left="19%";
        CuadroGestion.style.width="80%";

        CuadroAjustes.style.left="19%";
        CuadroAjustes.style.width="80%";

        CuadroBugs.style.left="19%";
        CuadroBugs.style.width="80%";

        abierto=true;
        //alert(abierto);
        n=0;

        return abierto
        

    }
}

