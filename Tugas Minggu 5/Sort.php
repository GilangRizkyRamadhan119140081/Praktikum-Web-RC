<<?php 

function urut(){
    echo "<h2> program untuk mengurutkan data </h2>";

    $aray = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "heksa", "anggi", "saputra");
    sort($aray);
    
    foreach ($aray as $data){
        echo "$data<br>";
    }
}

urut();



 ?>