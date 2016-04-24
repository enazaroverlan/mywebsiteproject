<?php
    define('MYSQL_SERVER', 'localhost');
    define('MYSQL_USER', 'root');
    define('MYSQL_PASSWORD', '');
    define('MYSQL_DB', 'abovethesky');



    function db_connect()
    {
        $con = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
            or die("Error: ".mysqli_error($con));
        
        if(!mysqli_set_charset($con, "utf8"))
        {
            printf("Error: ".mysqli_error($con));
        }
        
        return $con;
    }



?>