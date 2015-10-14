<?php

namespace Inc;

 class Personne{
    protected $id_personne;
    protected $login;
    protected $password;
    protected $email;
    protected $role;


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
}
    // abstract function consulter_qcm($qcm);

}

?>