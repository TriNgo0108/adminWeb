<?php 
    Class User{
        private int $id;
        private string $username;
        private string $email;
        private string $phone;

        public function __construct(int $id, string $username, string $email,string $phone)
        {
           $this->id = $id;
           $this->username = $username;
           $this->email = $email;
           $this->phone = $phone;
        }
        public function getUID(){
            return $this->id;
        }
        public function getUsername(){
            return $this->username;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }
    }
?>