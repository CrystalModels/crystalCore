<?php
    
    class model_validate {
        function  model_api_key($dta) {
            require_once 'database/db_users.php';
            $conectar = conn();
        
            if (!$conectar) {
                return "Error de conexión a la base de datos";
            }
        $apiKey=$dta['apiKey'];
        $xApiKey=$dta['xApiKey'];

            $apiKey1 = mysqli_real_escape_string($conectar, $apiKey);
        $xApiKey1 = mysqli_real_escape_string($conectar, $xApiKey);
            $query = mysqli_query($conectar, "SELECT secretId FROM generalSecrets WHERE secretValue = '$xApiKey1'");
        
            if ($query) {
                $result = mysqli_fetch_assoc($query);
                if ($result) {
                   // return $result['secretId'];


                    $query1 = mysqli_query($conectar, "SELECT ranCode FROM apiTokens WHERE tokenValue = '$apiKey1'");
                    if ($query1) {
                        $result1 = mysqli_fetch_assoc($query1);
                        if ($result1) {
                            return $result1['ranCode'];
                        }
                        else {
                            return "UNABLE TOKEN";//ningun elemento
                        }
                } else {
                    return "UNABLE QUERY";//ningun elemento
                }
            } else {
                return "UNABLE SECRET";
            }
        }else{
            return "UNABLE QUERY";
        }
    }
    function model_api_keyGateway($dta) {
        require_once 'database/db_users.php';
        $conectar = conn();
    
        if (!$conectar) {
            return "Error de conexión a la base de datos";
        }
    $apiKey=$dta['apiKey'];
    $xApiKey=$dta['xApiKey'];

        $apiKey1 = mysqli_real_escape_string($conectar, $apiKey);
    $xApiKey1 = mysqli_real_escape_string($conectar, $xApiKey);
        $query = mysqli_query($conectar, "SELECT secretId FROM generalSecrets WHERE secretValue = '$xApiKey1'");
    
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            if ($result) {
               // return $result['secretId'];


                $query1 = mysqli_query($conectar, "SELECT tokenValue FROM apiTokens WHERE ranCode = '$apiKey1'");
                if ($query1) {
                    $result1 = mysqli_fetch_assoc($query1);
                    if ($result1) {
                        return $result1['tokenValue'];
                    }
                    else {
                        return "UNABLE TOKEN";//ningun elemento
                    }
            } else {
                return "UNABLE QUERY";//ningun elemento
            }
        } else {
            return "UNABLE SECRET";
        }
    }else{
        return "UNABLE QUERY";
    }
}

    function model_api_keyLog($dta) {
        require_once 'database/db_users.php';
        $conectar = conn();
    
        if (!$conectar) {
            return "Error de conexión a la base de datos";
        }
    
    $xApiKey=$dta['xApiKey'];

    $xApiKey1 = mysqli_real_escape_string($conectar, $xApiKey);
        $query = mysqli_query($conectar, "SELECT secretId FROM generalSecrets WHERE secretValue = '$xApiKey1'");
    
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            if ($result) {
               // return $result['secretId'];


                
                        return "true";
                   
            } else {
                return "UNABLE QUERY";//ningun elemento
            }
        } else {
            return "UNABLE SECRET";
        }
    }

    function model_api_keyLogGateway($dta) {
        require_once 'database/db_users.php';
        $conectar = conn();
    
        if (!$conectar) {
            return "Error de conexión a la base de datos";
        }
    
    $xApiKey=$dta['xApiKey'];

    $xApiKey1 = mysqli_real_escape_string($conectar, $xApiKey);
        $query = mysqli_query($conectar, "SELECT secretId FROM generalSecrets WHERE secretValue = '$xApiKey1'");
    
        if ($query) {
            $result = mysqli_fetch_assoc($query);
            if ($result) {
               // return $result['secretId'];


                
                        return "true";
                   
            } else {
                return "UNABLE QUERY";//ningun elemento
            }
        } else {
            return "UNABLE SECRET";
        }
    }
}
    

?>