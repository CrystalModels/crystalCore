<?php
    
    class model_functions {
        function model_user($dta) {
    
            require_once 'database/db_users.php'; // Asegúrate de proporcionar la ruta correcta al archivo de conexión a la base de datos
    
            // Realiza la conexión a la base de datos (reemplaza conn() con tu propia lógica de conexión)
            $conectar = conn();
    
            // Verifica si la conexión se realizó correctamente
            if (!$conectar) {
                return "Error de conexión a la base de datos";
            }
    
            // Escapa los valores para prevenir inyección SQL
            $name = mysqli_real_escape_string($conectar, $dta['name']);
            $lastName = mysqli_real_escape_string($conectar, $dta['lastName']);
            $personalMail = mysqli_real_escape_string($conectar, $dta['personalMail']);
            $dato_encriptado = mysqli_real_escape_string($conectar, $dta['dato_encriptado']);
            $companyMail = mysqli_real_escape_string($conectar, $dta['companyMail']);
            $rolId = mysqli_real_escape_string($conectar, $dta['rolId']);
            $imageUrl = mysqli_real_escape_string($conectar, $dta['imageUrl']);
            $username = mysqli_real_escape_string($conectar, $dta['username']);
            $primeros_ocho = mysqli_real_escape_string($conectar, $dta['primeros_ocho']);
            $primeros_ocho2 = mysqli_real_escape_string($conectar, $dta['primeros_ocho2']);
            $primeros_ocho3 = mysqli_real_escape_string($conectar, $dta['primeros_ocho3']);
            $ownerId = mysqli_real_escape_string($conectar, $dta['ownerId']);
            $apiToken = mysqli_real_escape_string($conectar, $dta['apiToken']);
            $ranCode = mysqli_real_escape_string($conectar, $dta['ranCode']);

    
            $query= mysqli_query($conectar,"SELECT userName FROM generalUsers where userName='$username'");
            $nr=mysqli_num_rows($query);
        
            if($nr>=1){
                $info=[
        
                    'response' => "false",
                    'message' => "El nombre de usuario está repetido, intenta nuevamente, usuario generado automáticamente, gracias."
                    
                ];
             echo json_encode(['response'=>$info]);
             //echo "ups! el id del repo está repetido , intenta nuevamente, gracias.";
            }else{
        
              
                
                    if (strpos($username, " ") === false && strlen($username) > 5 && preg_match('/^[^@#%&,:ñÑ]+$/', $username)) {
                                  
        
                        if (preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[^\w\d\s:])([^\s]){8,}$/', $dato_encriptado))  {
                            $userm=$username."@crystalmodels.online.inbox";
                            $query= mysqli_query($conectar,"INSERT INTO generalUsers (userId,personalMail,companyMail,internalMail,profileId,keyWord,userName,ownerId) VALUES ('$primeros_ocho','$personalMail','$companyMail','$userm','$primeros_ocho2','$dato_encriptado','$username','$ownerId')");
                            $query1= mysqli_query($conectar,"INSERT INTO generalProfiles (profileId,name,lastName,rolId,imageUrl) VALUES ('$primeros_ocho2','$name','$lastName','$rolId','$imageUrl')");
                            $query2= mysqli_query($conectar,"INSERT INTO apiTokens (tokenId,tokenValue,ranCode,userId) VALUES ('$primeros_ocho3','$apiToken','$ranCode','$primeros_ocho')");
                                  





//creacion de horarios





                          
                            return $primeros_ocho2;
                        //echo "true"; // muestra "/mi-pagina.php?id=123"
            
            
                            //echo "La cadena contiene números, letras mayúsculas, minúsculas y símbolos";
                        } else {
                            $info=[
        
                                'response' => "false",
                                'message' => "La contraseña debe contener minimo 8 caracteres (mayusculas*,minusculas*,numeros*,simbolos*) o las contraseñas no coinciden."
                                
                            ];
                            echo json_encode($info);
                            //echo "La contraseña debe contener minimo 8 caracteres (mayusculas*,minusculas*,numeros*,simbolos*) o las contraseñas no coinciden";
                        }
        
                       
                        
                    } else {
                        $info=[
        
                            'response' => "false",
                            'message' => "usuario con espacios o cadena de texto menor a 5 caracteres."
                            
                        ];
                        echo json_encode($info);
                       // echo "usuario con espacios o cadena de texto mayor a 12 caracteres";
                    }
                                  
                                    
                                }
            
        }


    }
    
    
?>