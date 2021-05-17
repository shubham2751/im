<?php
    function connect(){
        //$dbHost= "localhost";
        // // here mysql port is 3306
        //$dbHost = "localhost";
        //$user= "root";
        //$pass= "";
        //$dbname="inventory-management";

        $dbHost = "remotemysql.com";
        $user= "Q8jhOPHLc5";
        $pass= "LSHr0CHDvC";
       	$dbname="Q8jhOPHLc5";
        

        $conn= new mysqli($dbHost, $user, $pass, $dbname);
        //echo "connected";
        return $conn;
    }

    function closeConnect($cn){
        $cn->close();
    }
?>