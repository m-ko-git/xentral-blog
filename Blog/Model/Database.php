<?php


namespace Blog\Model;


class Database extends \PDO
{
    private $host="";
    private $user="";
    private $db="";
    private $pass="";
    private $conn;

    public function __construct()
    {
        try{
            $this->conn = new \PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (\PDOException $e){
            echo("Couldn't establish connection").$e->getMessage();
        }
    }

    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $sth = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $sth->bindValue("$key", $value);
        }

        if(!$sth->execute()){
            $this->handleError();
        }
        else{
            return $sth->fetchAll($fetchMode);
        }
    }

    public function insert($table, $data)
    {
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        if(!$sth->execute()){
            $this->handleError();
        }
    }

    public function update($table, $data, $where)
    {
        ksort($data);

        $fieldDetails = NULL;
        foreach($data as $key=> $value) {
            $fieldDetails .= "`$key`=:$key,";
        }
        $fieldDetails = rtrim($fieldDetails, ',');

        $sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
        if(!$sth->execute()){
            $this->handleError();
        }
    }

    public function delete($table, $where, $limit = 1)
    {
        return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
    }

    public function rowsCount($table)
    {
        $sth = $this->prepare("SELECT * FROM ".$table);
        $sth->execute();
        return $sth -> rowCount();
    }

    public function handleError(){
        echo('Something went wrong');
    }

}