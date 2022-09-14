<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    include "./assets/classes/pdo_class.php";
    include "./assets/classes/add_complain.php";
    include "./assets/classes/constr_class.php";

    if (isset($_POST["name"],$_POST["firstname"],$_POST["email"],$_POST["file"],$_POST["description"])){
        $name = $_POST["name"];
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        $file = $_POST["file"];
        $description = $_POST["description"];
        echo "prout";
        $ob = new Construction($name,$firstname,$email,$file,$description);
        $ob->addDB();

    }


