
/*Identificar elementos*/
BotonCerrar=document.getElementById('cerrar');

BotonBar=document.getElementById('Bar');

MenuLateral=document.getElementById('MenuLateral');



Micro=document.getElementById('Micro');
var VentanaMicro=document.getElementsByClassName('VentanaMicro');
var h=VentanaMicro.length;

input=document.getElementById('input');

FormularioVoz=document.getElementById('FormularioVoz');

let reconocimientoVoz=window.SpeechRecognition || window.webkitSpeechRecognition

let recognition=new reconocimientoVoz(); /*Objeto para el reconocimiento de voz y pasarlo a texto*/

recognition.lang='es-Es';/*Español (America Latina) */

recognition.continuous=true; /*Si va a grabar continuamente */
recognition.interimResults=false;  /*Si no detecta sonido devuelve el resultado TRUE=DEVUELVE AL INSTANTE */



cerrar=document.getElementById('Cerrar');


var btnInicio=document.getElementById('Inicio2');

var VentanaSesion=document.getElementsByClassName('VentanaSesion');

var Capa=document.getElementById('capa');
btnCerrarInicio=document.getElementById('CerrarInicio');


/*Añadir eventos */

BotonCerrar.addEventListener("click",Ocultar);

BotonBar.addEventListener("click",Mostrar);



Micro.addEventListener('click',ReconocerVoz);

cerrar.addEventListener('click',Cerrar);






btnCerrarInicio.addEventListener('click',CerrarVtnSesion);

btnInicio.addEventListener('click',AbriVentanaSesion);



/*Funciones*/ 

function AbriVentanaSesion(){
    

    var longitud=VentanaSesion.length;

    for(i=0;i<longitud;i++){
        VentanaSesion[i].style.opacity="1";
        VentanaSesion[i].style.display="block";
    }

    Capa.style.opacity="1";
    Capa.style.visibility="visible"
    Capa.style.display="block";
    
}

function CerrarVtnSesion(){
    var longitud=VentanaSesion.length;
    
    for(i=0;i<h;i++){
        VentanaSesion[i].style.opacity="0";
        VentanaSesion[i].style.display="none";
    }
    Capa.style.opacity="0";
    Capa.style.visibility="hidden"
    Capa.style.display="none"
}


function Ocultar(){
    MenuLateral.style.transform="translateX(-100%)";
    MenuLateral.style.display="none";
}

function Mostrar(){
    MenuLateral.style.visibility="visible"

    MenuLateral.style.transform="translateX(0.001%)";

    MenuLateral.style.display="block";
}

function ReconocerVoz(){
    
    for(i=0;i<h;i++){
        VentanaMicro[i].style.opacity="1";
        VentanaMicro[i].style.display="block";
    }
    
    recognition.start();/*Empieza a grabar */

}

/*Funcion anonima que se ejecuta cuando se reciba un resultado */

recognition.onresult=(event)=>{

    const results=event.results;/*Se obtiene el resultado */
    console.log(results);
    var frase=results[results.length-1][0].transcript;
    
    input.value=frase;


    if(input.value!=""){
        
        setTimeout(CerrarMicroSubir, 700); /*Hacer que la ejecucion se ejecute un tiempo despues (funcion,tiempo en milisegundos) */
    
    }

    
}

function CerrarMicroSubir(){

    recognition.stop();
    
    subirFormulario();
    Cerrar();

}


recognition.onend=(event)=>{
    recognition.stop();
    alert("El microfono ha dejado de escuchar");
    Cerrar();
    
}

recognition.onerror=(event)=>{
    console.log(event.error);
}

function Cerrar(){

    
    for(i=0;i<h;i++){
        VentanaMicro[i].style.opacity="0";
        VentanaMicro[i].style.display="none";
    }
    recognition.stop();
    recognition.about();
    
}

function subirFormulario(){
    FormularioVoz.submit();
}



