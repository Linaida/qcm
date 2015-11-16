<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 14/10/2015
 * Time: 12:35
 */




class Auth {

    private $session;
    private $errors = [];

    public function __construct($session){
        $this->session = $session;
    }

    public function connect($user){
        $this->session->write('auth', $user);
    }

    public function login($pdo, $login, $password){
        $user = $pdo->query('SELECT * FROM personne WHERE (login = :login OR email = :login)', ['login' => $login])->fetch();
       // var_dump($user);
        if($user){
            if(substr_compare($password, $user->password,0) == 0){
                $this->connect($user);
                return $user;
            }else{
                //array_push($this->errors,"Mauvais mot de passe");
                throw new ErrorException("Mauvais mot de passe");

            }

        }else{
            // array_push($this->errors,"L'utilisateur n'existe pas");
            throw new ErrorException("Utilisateur inconnu");
        }

        throw new ErrorException("Une erreur s'est produite durant la vérification");
    }

    public function restrict(){
        if(!$this->session->read('auth')){
            $this->session->setFlash('danger', "Vous n'avez pas le droit d'accéder à cette page");
            //header('Location: login.php');
            exit();
        }
    }
    public function getErrors(){
        return $this->errors;
    }

}