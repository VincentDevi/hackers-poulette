<?php
require('vendor/autoload.php');
use Rakit\Validation\Validator;
    class Construction extends addComplain
    {
        private $name;
        private $firstname;
        private $email;
        private $file;
        private $description;

        public function __construct($name, $firstname, $email, $file, $description)
        {
            $this->name = $name;
            $this->firstname = $firstname;
            $this->email = $email;
            $this->file = $file;
            $this->description = $description;
        }

        public function addDB()
        {
            $name_sanitize = $this->sanitizeText($this->name);
            $firstname_sanitize = $this->sanitizeText(($this->firstname));
            $description_sanitize = $this->sanitizeText($this->description);


            $validator = new Validator();
            $values = ['name' => $name_sanitize,
                'firstname' => $firstname_sanitize,
                'email' => $this->email,
                'file' => $this->file,
                'description' => $description_sanitize
            ];

            $rules = [
                'name' => 'required|regex:/^[a-zA-Z]+$/',
                'firstname' => 'required|regex:/^[a-zA-Z]+$/',
                'email' => 'required|email',
                'file' => 'uploaded_file:0,2M,png,jpeg,gif',
                'description' => 'required'
            ];
            $validation = $validator->make($values, $rules);
            $validation->validate();

            if ($validation->fails()) {
                $errors = $validation->errors();
                echo "<pre>";
                print_r($errors);
                echo "</pre>";


            } else {
                $this->createComplain($name_sanitize, $firstname_sanitize, $this->email, $this->file, $description_sanitize);
            }
        }

        private function sanitizeText($text)
        {
            return htmlspecialchars($text);
        }


    }













