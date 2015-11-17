<?php



class Professeur extends Personne {
    protected $id_personne;
   // protected $id;
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

    public  function consulter_question($database){
        //$datas = $database->query('SELECT * FROM question_reponse WHERE (auteur_id = :id)', ['id' => $this->id_personne])->fetchAll();
        //echo $this->id
        $query = "SELECT * FROM question_reponse WHERE auteur_id = .$this->id_personne " ;
        try{
            $datas = $database->query($query)->fetchAll();
        }catch (PDOException $e){
            throw new Exception("Vous n'avez pas encore créer de question_reponse");
        }

    return $datas;
    }
    public  function creer_qcm($qcm){}
    public  function editer_qcm($qcm){}
    public  function supprimer_qcm($qcm){}
}

?>