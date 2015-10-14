<?php
/**
 * Created by PhpStorm.
 * User: Linda
 * Date: 13/10/2015
 * Time: 21:12
 */


class Database {
    private $db_name;
    private $db_user;
    private $db_password;
    private $db_host;
    private $pdo;

    function __construct($db_name='nvl9284a', $db_user='nvl9284a', $db_password='8F7fezxd', $db_host='localhost')
    {
        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_password = $db_password;
        $this->db_host = $db_host;
    }

    /**
     * @return mixed
     */
    public function getPdo()
    {
        $pdo = new PDO('mysql:dbname=nvl9284a;host=localhost','nvl9284a','8F7fezxd');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $this->pdo;
    }
    public function query($statement){
        $req = $this->getPdo()->query($statement);
        $data = $req->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }



}