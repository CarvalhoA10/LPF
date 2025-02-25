<?php

class Model{

    private string $table_name;
    private array $columns;
    private string $sql;
    private string $query;

    public function execute()
    {
        require_once "./src/app/Database.php";
        $conn = Database::connect();
        $this->sql = rtrim($this->sql, ',');
        $this->sql = $this->sql . ");";
        $prep = $conn->prepare($this->sql);
        $prep->execute();

        
    }

    public function new_database(string $name)
    {
        $this->table_name = $name;
        $this->sql = "CREATE TABLE IF NOT EXISTS $name (";
        return $this;
    }

    public function string(string $column, int $length)
    {
        $this->columns[] = $column;
        $this->sql = $this->sql . "$column VARCHAR($length),";
        return $this;
    }

    public function primary_key(string $column)
    {
        $this->columns[] = $column;
        $this->sql = $this->sql . "$column INT PRIMARY KEY AUTO_INCREMENT,";
        return $this;
    }

    public function number(string $column)
    {
        $this->columns[] = $column;
        $this->sql = $this->sql . "$column INT,";
        return $this;
    }

    public function date_(string $column)
    {
        $this->columns[] = $column;
        $this->sql = $this->sql . "$column DATE,";
        return $this;
    }

    public function date_time(string $column)
    {
        $this->columns[] = $column;
        $this->sql = $this->sql . "$column DATETIME,";
        return $this;
    }

    public function unique()
    {

        $this->sql = rtrim($this->sql, ',') . " UNIQUE,";
        return $this;
    }

    public function nullable()
    {
        $this->sql = rtrim($this->sql, ',') . " NOT NULL,";
        return $this;
    }

    public function add(array $values = [])
    {
        
    }
}