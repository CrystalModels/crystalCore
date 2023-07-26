<?php

class versiones {

function ver_change() {
    
    $values=[];

    $value=[
        '1.0.1-Beta' => '2023-07-26-sistema de versionamiento',
        '1.0.0-Beta' => '2023-07-25-sistema base'
        
    ];
    array_push($values,$value);

    return json_encode(['crystalCore-apiUsers'=>$values]);
}

}

?>