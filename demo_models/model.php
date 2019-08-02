<?php
    define("DBNAME", 'skyheights_db');
    define("DBUSER", 'root');
    define("DBPASS", 'dre');

        try{

          $conn = new PDO('mysql:host=localhost;dbname='.DBNAME, DBUSER, DBPASS);

          $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
                 die("Could Not Connect");
        }

 ?>
