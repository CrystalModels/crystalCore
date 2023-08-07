<?php

class versiones {

function ver_change() {
    
    $values=[];

    $value=[
        '1.0.0-pr' => '2023-08-03- Sistema base'
        
    ];
    array_push($values,$value);

    return json_encode(['crystalCore-apiAuth'=>$values]);
}

}

?>