<?php
    class Contact{
        public $contactID;
        public $username;
        public $email;

        public function load($row){
            $this->contactID = $row['contactID'];
            $this->username=$row['username'];
            $this->email=$row["email"];
        }

       

        public function setContactID($contactID){
            $this->contactID=$contactID;
        }

        public function getContactID(){
            return $this->contactID;
        }

        public function setUsername($username){
            $this->username=$username;
        }

        public function getUsername(){
            return $this->username;
        }

        public function setEmail($email){
            $this->email=$email;
        }

         public function getEmail(){
            return $this->email;
        }
    }
?>