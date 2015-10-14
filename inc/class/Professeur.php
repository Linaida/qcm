<?php

namespace Inc;

class Professeur extends Personne {
    private $id_personne;
    private $login;
    private $password;
    private $email;
    private $role;

    function __construct()
    {
        $this->role = "professeur";
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

    public  function consulter_qcm($qcm){   }
    public  function creer_qcm($qcm){}
    public  function editer_qcm($qcm){}
    public  function supprimer_qcm($qcm){}
}

?>