<?php

class QueryBuilder
{
    private $db = NULL;
    public function __construct($pdo)
    {
        $this->db = $pdo;
    }

    public function select_all($table)
    {
        $sql = "SELECT * FROM $table";
        $statement = $this->db->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}