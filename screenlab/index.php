<?php
    require ('src/conf/init.php');
    require ('src/components/header.php');
    if ((count($_GET)!=0) && !isset($_GET['page'])){
        require ("erreur.php");
    }
    else if (isset($_GET['page'])) {
        $page = $_GET['page'];
        require ('src/pages/' . $page . '.php');
    }
    else{
           require ('src/pages/accueil.php'); 
        }

    require ('src/components/footer.php');
?>