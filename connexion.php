<?php 
     ini_set('display_errors', 1);
      ini_set('display_startup_errors', 1);
      error_reporting(E_ALL);   
    session_start();    

$dsn = 'mysql:host=localhost;dbname=Vapfactory';

$username = 'root';

$password = 'root';

try{
        $connection = new PDO ( $dsn,$username,$password);
         
       

} catch (PDOException $e) {


}