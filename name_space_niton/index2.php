<?php 

    require_once('mysql_connect.php');
    require_once('postgresqlconnect.php');
    $connect1 = new NS1\connection;
    $connect2 = new NS2\connection;
    var_dump($connect1);
    var_dump($connect2);

    // calling two different same name class
    // in different file using same namespace



    // just remenber if there are two class are same name
    // use the namespace

    

?>