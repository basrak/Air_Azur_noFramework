<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body> 

    <?php
    
    include dirname(__DIR__).'/model/backend/Connexion.php';
    include dirname(__DIR__).'/model/backend/BddManager.php';
    include dirname(__DIR__).'/model/backend/VolManager.php';
    
    $connect = Connexion::getInstance();
    
    $bdd = new VolManager($connect);
    
    $bdd->sqlToXml($connect, 'users', 'Agence du soleil');
     echo $bdd;
    ?> 

 </body>
</html>