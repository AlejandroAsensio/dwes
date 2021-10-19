<?php 
include ('tCA.php');
?>

<script>
var xmlhttp;

function accionAJAX(){
    document.getElementById("mensaje").innerHTML=xmlhttp.responseText;
}
function usarAJAX() {
    
   
    
    xmlhttp = new XMLHttpRequest()
    
    
    xmlhttp.open('POST','saludo.php',true);
    xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send('nombre='+document.getElementById('nombre').value);
    
    
    
    xmlhttp.onreadystatechange=function() {
        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
            accionAJAX();
        }
    }
    }
</script>

<body>


<h1>Comunidades Autonomas</h1>

ccaa

<?php 

$ca = array_keys($BDccaa);
pintarCA($ca);


?>
<!-- <br/> -->
// <?php 
// pintarP($BDcca['Andalucía'[0]]);   
// ?>
