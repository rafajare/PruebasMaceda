<?php
    //PHP
    $payload =json_decode($_POST['payload']);
    $payload->ref;
    
    //Ejecutar
    echo shell_exec('sh ./script.sh');
    //El date log lo hace en el script

?>