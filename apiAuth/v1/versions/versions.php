<?php

class versiones {

function ver_change() {
    
    $values=[];

    $value=[
        '1.0.0-Beta' => '2023-07-25-sistema base'
        
    ];
    array_push($values,$value);

    return json_encode(['crystalCore-apiAuth'=>$values]);
}

}

?>