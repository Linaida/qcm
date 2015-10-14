<?php
namespace Inc;

 class Etudiant extends Personne {
     private $id_personne;
     private $login;
     private $password;
     private $email;
     private $role;

     function __construct()
     {
         $this->role = "etudiant";
     }


     /* Methodes héritées
     protected function getLogin(){
           return $this->login;
       }
       protected function getPassword(){
           return $this->password;
       }
       protected function getEmail(){
           return $this->email;
       }
       protected function getRole(){
           return $this->role;
       }*/

     public  function consulter_qcm($qcm){

    } public  function remplir_qcm($qcm){

    } public  function consulter_note($qcm){

    }


}

?>