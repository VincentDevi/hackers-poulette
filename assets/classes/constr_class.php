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
            $name_sanitize = $this->sanitizeText($this->name);
            $firstname_sanitize = $this->sanitizeText(($this->firstname));
            $description_sanitize = $this->sanitizeText($this->description);


            if ( ! $this->emptyInput()){
                // echo "Empty Input";
                header("location: /hackers-poulette/index.html");
                exit();
            }

            if ( ! $this->invalidName($name_sanitize) && ! $this->checkStrLength($name_sanitize)){
                // echo "Invalid Name";
                header("location: /hackers-poulette/index.html");
                exit();
            }
            if ( ! $this->invalidFirstname($firstname_sanitize) && ! $this->checkStrLength($this->firstname)){
                //echo "Invalid Firstname";
                header("location: /hackers-poulette/index.html");
                exit();
            }
            if ( ! $this->invalidEmail() && ! $this->checkStrLength($this->email) ){
                //echo "Invalid Email";
                header("location: /hackers-poulette/index.html");
                exit();
            }
            if ( ! $this->invalidFileExtension()){
                // echo "Invalid file extension";
                header("location:/hackers-poulette/index.html");
                exit();
            }

            if ( ! $this->checkStrLength($description_sanitize)) {
                header("location: /hackers-poulette/index.html");
                exit();
            }
            else{
                $this->createComplain($name_sanitize, $firstname_sanitize, $this->email, $this->file, $description_sanitize);

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

        private function invalidName($text){
            if ( !preg_match("/^[a-zA-Z]+$/", $text)){
                $result =false;
            }
            else{
                $result = true;
            }
            return $result;
        }
        private function invalidFirstname($text){
            $firstname_sanitize = $this->sanitizeText($this->firstname);
            if ( !preg_match("/^[a-zA-Z]+$/", $text)){
                $result =false;
            }
            else{
                $result = true;
            }
            return $result;
        }

        private function sanitizeText($text){
           return htmlspecialchars($text);
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
        private function checkStrLength($inputText){
            if ( strlen($inputText) < 1 ){
                $result = false;
            }
            else{
                $result = true;
            }
            return $result;
        }
    }
