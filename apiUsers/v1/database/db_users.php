<?php



function conn() {



    require_once 'env/option.php';
    $sub_domaincon = new model_option();
    $sub_domain = $sub_domaincon->dom();
    $option=$sub_domain;

    if($option==1){
        $hostname = "localhost"; // o dirección IP del servidor de la base de datos remota
        $usuariodb = "root"; // reemplazar con el usuario de la base de datos
        $passworddb = ""; // reemplazar con la contraseña de la base de datos
        $dbname = "crystalcor"; // reemplazar con el nombre de la base de datos
    
    try {
        // Conexión a la base de datos
        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

        // Establecer el conjunto de caracteres de la conexión
        if (!mysqli_set_charset($conectar, "utf8mb4")) {
            throw new Exception("Error al establecer el conjunto de caracteres: " . mysqli_error($conectar));
        }

        return $conectar;
    } catch (Exception $e) {
        // Manejo del error
        echo "Error al conectar con la base de datos: " . $e->getMessage();
        exit();
    }
}
if($option==2){
    $hostname = "localhost"; // o dirección IP del servidor de la base de datos remota
    $usuariodb = "u495616274_dev_crystalcor"; // reemplazar con el usuario de la base de datos
    $passworddb = "e8:WTU8jAzY"; // reemplazar con la contraseña de la base de datos
    $dbname = "u495616274_dev_crystalcor"; // reemplazar con el nombre de la base de datos

    try {
        // Conexión a la base de datos
        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

        // Establecer el conjunto de caracteres de la conexión
        if (!mysqli_set_charset($conectar, "utf8mb4")) {
            throw new Exception("Error al establecer el conjunto de caracteres: " . mysqli_error($conectar));
        }

        return $conectar;
    } catch (Exception $e) {
        // Manejo del error
        echo "Error al conectar con la base de datos: " . $e->getMessage();
        exit();
    }
}
if($option==3){
    $hostname = "localhost"; // o dirección IP del servidor de la base de datos remota
    $usuariodb = "u495616274_stg_crystalcor"; // reemplazar con el usuario de la base de datos
    $passworddb = "e8:WTU8jAzY"; // reemplazar con la contraseña de la base de datos
    $dbname = "u495616274_stg_crystalcor"; // reemplazar con el nombre de la base de datos

    try {
        // Conexión a la base de datos
        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

        // Establecer el conjunto de caracteres de la conexión
        if (!mysqli_set_charset($conectar, "utf8mb4")) {
            throw new Exception("Error al establecer el conjunto de caracteres: " . mysqli_error($conectar));
        }

        return $conectar;
    } catch (Exception $e) {
        // Manejo del error
        echo "Error al conectar con la base de datos: " . $e->getMessage();
        exit();
    }
}
if($option==4){
    $hostname = "localhost"; // o dirección IP del servidor de la base de datos remota
    $usuariodb = "u495616274_crystalcore"; // reemplazar con el usuario de la base de datos
    $passworddb = "e8:WTU8jAzY"; // reemplazar con la contraseña de la base de datos
    $dbname = "u495616274_crystalcore"; // reemplazar con el nombre de la base de datos

    try {
        // Conexión a la base de datos
        $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);

        // Establecer el conjunto de caracteres de la conexión
        if (!mysqli_set_charset($conectar, "utf8mb4")) {
            throw new Exception("Error al establecer el conjunto de caracteres: " . mysqli_error($conectar));
        }

        return $conectar;
    } catch (Exception $e) {
        // Manejo del error
        echo "Error al conectar con la base de datos: " . $e->getMessage();
        exit();
    }
}
}


?>