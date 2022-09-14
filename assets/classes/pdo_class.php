<?php
    class Dbh{
        private $user = "vinz";
        private $password = "5739";
        protected function connexion(){
            try {
                return new PDO("mysql:host=localhost;dbname=poule", $this->user, $this->password);
            }catch (PDOException $e){
                echo "ERROR: ".$e->getMessage();
                die();
            }
        }
    }