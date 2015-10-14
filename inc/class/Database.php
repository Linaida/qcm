<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 13/10/2015
 * Time: 21:12
 */


class Database {

    private $pdo;

    function __construct($db_name='nvl9284a', $db_user='nvl9284a', $db_password='8F7fezxd', $db_host='localhost')
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

    public function lastInsertId(){
        return $this->pdo->lastInsertId();
    }



}