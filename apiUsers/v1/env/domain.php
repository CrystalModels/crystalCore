<?php

class model_domain {

function dom() {
    $option=2; //opcion de subdominio


    if($option==1){//localhost
        $sub_domain="http://localhost";
        return $sub_domain;

    }
    if($option==2){//desarrollo
 $sub_domain="https://dev-crystalbroker.crystalmodels.online"; // o dirección IP del servidor de la base de datos remota
 return $sub_domain;

    }
    if($option==3){//pruebas-staging
        $sub_domain="https://staging-crystalbroker.crystalmodels.online";
        return $sub_domain;
    }
    if($option==4){//ptoducción

        $sub_domain="https://crystalbroker.crystalmodels.online";
        return $sub_domain;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
function domIntegrations() {
    $option=2; //opcion de subdominio


    if($option==1){//localhost
        $sub_domain="http://localhost";
        return $sub_domain;

    }
    if($option==2){//desarrollo
 $sub_domain="https://dev-crystalintegrations.crystalmodels.online"; // o dirección IP del servidor de la base de datos remota
 return $sub_domain;

    }
    if($option==3){//pruebas-staging
        $sub_domain="https://staging-crystalintegrations.crystalmodels.online";
        return $sub_domain;
    }
    if($option==4){//ptoducción

        $sub_domain="https://crystalintegrations.crystalmodels.online";
        return $sub_domain;
    }
   //$sub_domain="https://dev-lugmacore.lugma.tech"; // o dirección IP del servidor de la base de datos remota
   
}
}

?>