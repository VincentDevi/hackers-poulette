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
                header("location: ../index.html?error=emptyinput");
                exit();
            }
            if ( ! $this->invalidName()){
                // echo "Invalid Name";
                header("location: ../index.html?error=name");
            }
            if ( ! $this->invalidFirstname()){
                //echo "Invalid Firstname";
                header("location: ../index.html?error=firstname");
            }
            if ( ! $this->invalidEmail() ){
                //echo "Invalid Email";
                header("location: ../index.html?error=email");
            }
            else{
                $this->createComplain($this->name, $this->firstname, $this->email, $this->file, $this->description);
                header("location: ../index.html?error=none");

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

            if ( !preg_match("/^[a-zA-Z0-9]+$/", $this->description)){
                $result =false;
            }
            else{
                $result = true;
            }
            return $result;
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
    }
