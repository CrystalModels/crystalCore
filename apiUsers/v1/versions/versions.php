<?php

class versiones {

function ver_change() {
    
    $values=[];

    $value=[
        
        '1.0.0-Beta' => '2023-08-03- Sistema base'
        
    ];
    array_push($values,$value);

    return json_encode(['crystalCore-apiUsers'=>$values]);
}

}

?>