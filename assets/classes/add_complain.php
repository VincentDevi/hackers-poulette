<?php
    class addComplain extends Dbh {
        protected function createComplain($name,$firstname,$email,$file,$description){
            $query= "INSERT INTO" ." claime" ." (name,firstname,email,file,description)"
                    ." VALUES (:name, :firstname, :email, :file, :description)";
            $con = $this->connexion();
            $stmt=$con->prepare($query);
            $stmt->execute([
               "name" =>$name,
               "firstname"=>$firstname,
               "email"=>$email,
               "file"=>$file,
               "description"=>$description
            ]);
            $stmt = null;
        }
    }