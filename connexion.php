<?php 

$dsn = 'mysql:host = localhost;dbname = Vapfactory';

$username = 'root';

$password = 'root';

try{
        $connetion = new PDO ( $dsn,$username,$password);
        echo 'connexion reussi';


} catch (PDOException $e) {


}