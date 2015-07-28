<?php

class DB{
    private $DB;
    private $className = 'stdClass';

    public function __construct()
    {
        $login = 'root';
        $password = '';
        $host = 'localhost';
        $db_name = 'Site_News';

        $this->DB = new PDO('mysql:dbname=' . $db_name . ';host=' . $host , $login, $password);
    }

    public function setClassName($className)
    {
        $this->className = $className;
    }
    public function query($sql, $params = [])
    {
        $DB = $this->DB->prepare($sql);
        $DB->execute($params);
        return $DB->fetchAll(PDO::FETCH_CLASS, $this->className);
    }

    public function execute($sql, $params = [])
    {
        $DB = $this->DB->prepare($sql);
        $DB->execute($params);
    }

    public function lastInsertId()
    {
        return $this->DB->lastInsertId();
    }
}
