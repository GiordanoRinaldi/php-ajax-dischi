<?php 
require __DIR__ . "/../database.php";

header("Content-Type: application/json");

if(!empty($_GET["genre"]) ) {
    $genre = $_GET["genre"];
    $dischi_filtrati = [];
    foreach($database as $dischi) {
        if($genre == strtolower($dischi["genre"])){
            $dischi_filtrati[] = $dischi;
        }
    }
    echo json_encode($dischi_filtrati);
}else{
    echo json_encode($database);
}

