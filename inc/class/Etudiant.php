<?php

 class Etudiant extends Personne {
     protected $id_personne;
     protected $login;
     protected $password;
     protected $email;
     protected $role;


     public function getLogin(){
           return $this->login;
       }
     public function getPassword(){
           return $this->password;
       }
     public function getEmail(){
           return $this->email;
       }
     public function getRole(){
           return $this->role;
       }

     public  function consulter_qcm($qcm){

    }
     public  function remplir_qcm($qcm){

    }
     public  function consulter_note($qcm){

    }


}

?>