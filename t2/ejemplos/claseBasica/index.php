<?php
require_once 'Persona.php';
require_once 'Musico.php';
// $p = new Persona('Pepe',45);
// // $p->setNombre('Pepe');
// // $p->dimeNombre();
// echo $p->getNombre();
//     $personas = [];
//     for ($i = 10; $i <=20; $i++){
//         $personas[] = new Persona("clon",$i);
//     }
//     foreach ($personas as $persona){
//         echo $persona."\n";
//     }

// for ($i = 10; $i <=20; $i++){ TODO
//     if(time()%2==0){
        
//     }
//     $personas[] = new Musico("clon",$i);
// }


$personas = [];
for ($i = 10; $i <=20; $i++){
    $personas[] = new Musico("clon",$i);
}
foreach ($personas as $persona){
    echo $persona."\n";
    echo $persona->cantar();
    $persona->dimeNombre();
    $persona->hablar();
}
?>