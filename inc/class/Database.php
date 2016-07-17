<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 13/10/2015
 * Time: 21:12
 */


class Database {

    private $pdo;

    function __construct($db_name='db322671_qcm', $db_user='db83538', $db_password='password', $db_host='db322671-qcm.sql-pro.online.net')
    {
        $this->pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_password);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }
    /**
     * @param $query
     * @param bool|array $params
     * @return PDOStatement
     */
    public function query($query, $params = false){
        if($params){
            $req = $this->pdo->prepare($query);
            $req->execute($params);
        }else{
            $req = $this->pdo->query($query);
        }
        return $req;
    }
    public function get_personne($id){
        $query = "SELECT * FROM personne WHERE id =$id";
        return $this->query($query);
    }
    public function edit_personne($user){
        $query ="UPDATE `nvl9284a`.`personne` SET `login` = $user->getLogin(), `password` = $user->getPasswor(), `email` = $user->getEmail() WHERE `personne`.`id` = $user->getIdPersonne();";
        return $this->query($query);
    }

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }



}
