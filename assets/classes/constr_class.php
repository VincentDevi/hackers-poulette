<?php
    class Construction extends addComplain {
        private $name;
        private $firstname;
        private $email;
        private $file;
        private $description;

        public function __construct($name,$firstname,$email,$file,$description)
        {
            $this->name = $name;
            $this ->firstname = $firstname;
            $this ->email = $email;
            $this ->file = $file;
            $this->description = $description;
        }

        public function addDB(){
            if ( ! $this->emptyInput()){
                // echo "Empty Input";
                header("location: /hackers-poulette/index.php?error=emptyinput");
                exit();
            }
            if ( ! $this->invalidName()){
                // echo "Invalid Name";
                header("location: /hackers-poulette/index.php?error=name");
                exit();
            }
            if ( ! $this->invalidFirstname()){
                //echo "Invalid Firstname";
                header("location: /hackers-poulette/index.php?error=firstname");
                exit();
            }
            if ( ! $this->invalidEmail() ){
                //echo "Invalid Email";
                header("location: /hackers-poulette/index.php?error=email");
                exit();
            }
            if ( ! $this->invalidFileExtension()){
                // echo "Invalid file extension";
                header("location:/hackers-poulette/index.php?error=file");
            }
            else{
                $right_desc = $this->invalidDescription();
                $this->createComplain($this->name, $this->firstname, $this->email, $this->file, $right_desc);
                header("location: /hackers-poulette/index.php?error=none");

            }
        }


        private function emptyInput(){

            if ( empty( $this->name || $this->firstname || $this->email  || $this->file || $this->description) ){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        private function invalidName(){

            if ( !preg_match("/^[a-zA-Z]+$/", $this->name)){
                $result =false;
            }
            else{
                $result = true;
            }
            return $result;
        }
        private function invalidFirstname(){

            if ( !preg_match("/^[a-zA-Z]+$/", $this->firstname)){
                $result =false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        private function invalidDescription(){
           return filter_var($this->description, FILTER_SANITIZE_STRING);
        }

        private  function invalidEmail(){
            if ( !filter_var( $this->email, FILTER_VALIDATE_EMAIL)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        private function invalidFileExtension(){
            $allowed_extension = [ "jpg","png","gif"];
            $extension = pathinfo($this->file,PATHINFO_EXTENSION);
            if ( ! in_array($extension, $allowed_extension)){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }
    }
