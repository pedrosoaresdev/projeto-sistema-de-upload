<?php

$pasta = "arquivos/";
$dir = dir($pasta);

while($arquivo = $dir-> read()){
    if($arquivo != '.' && $arquivo != '.'){
        echo "<a href='".$pasta.$arquivo."'><img src= '".$pasta.$arquivo."' width= '55'> ".$arquivo."</a><br>";
    }
}


?>