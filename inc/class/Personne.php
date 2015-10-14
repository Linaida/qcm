<?php


 class Personne{
    protected $id_personne;
    protected $login;
    protected $password;
    protected $email;
    protected $role;

     function __construct($user)
     {
         $this->login = $user->login;
         $this->password = $user->password;
         $this->email = $user->email;
         $this->role = $user->role;
         $this->id_personne = $user->id;
     }

     /**
      * @param mixed $id_personne
      */
     public function setIdPersonne($id_personne)
     {
         $this->id_personne = $id_personne;
     }


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
    // abstract function consulter_qcm($qcm);

}

?>