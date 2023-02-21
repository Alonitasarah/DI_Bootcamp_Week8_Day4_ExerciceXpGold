<?php
  
    $dbhost = 'localhost';
    $dbport = '5432';
    $dbname = 'php_postgre';
    $dbuser = 'postgres';
    $dbpassword = 12136270;

    $dbconn = pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpassword");

    if (!$dbconn) {
        echo "Impossible de se connecter à la base de données.\n";
    exit;
    }else{
        echo "Connecté à la base de données.\n";
    }

    $query = "UPDATE COMPANY set SALARY = 25000.00 where ID=1;";

    $result = pg_query($dbconn, $query);

    if (!$result) {
       echo "Échec de la requête.\n";
       
    exit;
    }else{
        echo "Requête réussie.\n";
        
    }

    pg_close($dbconn);
?>