<?php

    $host = 'localhost';
	$username = 'root';
	$password = '';
    $database = 'sma_db';
    
    $db = mysqli_connect($host, $username, $password,$database);

    // $db_connection = pg_connect("host=localhost port=5432 dbname=fpcoba user=postgres password=1234");
    if( !$db ){
        die("Gagal terhubung dengan database: " . mysqli_connect_error());
    }

?>