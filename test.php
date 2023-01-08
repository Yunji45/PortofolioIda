<?php
    ini_set( 'submit', 1 );   
    error_reporting( E_ALL );    
    $from = "yunjisyadaid@gmail.com";    
    $to = "ihyanatikwibowo@gmail.com";    
    $subject = "Checking PHP mail";    
    $message = "PHP mail berjalan dengan baik";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>
