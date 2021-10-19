
<script>
var xmlhttp;

function accionAJAX(){
    document.getElementById("mensaje").innerHTML=xmlhttp.responseText;
}
function usarAJAX() {
    
    //Crea objeto de la clase XMLHttpRequest()
    
    xmlhttp = new XMLHttpRequest()
    //Ese objeto abre una conexión con el servidor mandándole el comando GET cuando lo haga
    //ajax.php es la uri a la que se va a conectar
    //true - la conexión va a ser asíncrona
    
    xmlhttp.open('POST','saludo.php',true);
    xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    //manda la petición al servidor
    
    xmlhttp.send('nombre='+document.getElementById('nombre').value);
    
    
    
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            accionAJAX();
        }
    }
    }
</script>


<h1>Saludador</h1>

Introduce tu nombre
<input id="nombre" type="text" />
<br/>

<div id="mensaje"></div>

<button type="button" onclick="usarAJAX();">Saludar</button>

