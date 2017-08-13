<?php

require_once 'app/config.php';


class Database
{

    public $connection;
    public $table = null;
    public $sqlSyntax;
    public $resource;
    public $last_id;
    public $noRows;
    public $buildStatement;


    public function __construct()
    {
        // connnect to databse and establish connect in the db
        $this->connection = new mysqli(SERVER, USER, PASSWORD, DATABASE);
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

    }

    public function getTable()
    {
        return $this->table;
    }

    public function setTable($table)
    {
        return $this->table = $table;
    }

    public function runQuery()
    {

        if ($result = $this->connection->query($this->sqlSyntax))
        {
            return $this->resource = $result;
        }
        else
            {
                echo $this->connection->error;
            }
    }

    public function returnData()
    {

        $data = null;

        while($rows = mysqli_fetch_assoc($this->resource))
        {
            $data[] = $rows;
        }

        return $data;

    }


    public function getbyId($id, $cols = null)
    {

        if ( is_array($cols) && !empty($cols) )
        {
            $cols = implode(", ", $cols);
            $this->sqlSyntax = "SELECT ". $cols ." FROM {$this->table} WHERE id = {$id}";

        }
        else
            {
                $this->sqlSyntax = "SELECT * FROM {$this->table} WHERE id = {$id}";
            }

        $this->runQuery();
        return $this;
    }

    public function listall($cols = null)
    {

        if (is_array($cols) && !empty($cols))
        {
            $cols = implode(", ", $cols);
            $this->sqlSyntax = "SELECT ". $cols ." FROM {$this->table} ORDER BY ID DESC";
        }
        else
            {
                $this->sqlSyntax = "SELECT * FROM {$this->table}";
            }


        $this->runQuery();
        return $this;
        
    }


    public function insert($data)
    {

        if( is_array($data) && !empty($data) )
        {
            $cols = implode(', ', array_keys($data));
            $colValues = implode("', '", $data);
            
            $colValues = "'".$colValues."'";
            $sql = "INSERT INTO ". $this->table . " (". $cols .") VALUES ". "(". $colValues . ")";
            $this->sqlSyntax = $sql;
            return $this->runQuery();

        }

    }


    public function update($data, $id)
    {
        if(is_array($data) && !empty($data) && $id != null)
        {

            $keyValues = null;
            $curIndex = 0;

            foreach ($data as $key => $value)
            {
                $curIndex++;
                $keyValues .= $key . "='";
                if($curIndex != sizeof($data))
                {
                    $keyValues .= $value ."', ";
                } else
                    {
                        $keyValues .= $value ."' ";
                    }
            }

            $sql = "UPDATE {$this->table} SET ";
            $sql .= $keyValues;
            $sql .= "WHERE id =" . $id;

            $this->sqlSyntax = $sql;
            return $this->runQuery();
        }
        else
            {
                return false;
            }

    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = {$id} LIMIT 1";
        $this->sqlSyntax = $sql;
        return $this->runQuery();
    }

    public function returnSet($email, $password)
    {
        $password = sha1($password);
        $sql = "SELECT id, name, email, role_id FROM {$this->table} WHERE email = '{$email}' AND password = ". "'{$password}'";
        
        $this->sqlSyntax = $sql;
        $this->runQuery();

        if ($this->resource != false)
        {
            return $this->returnData();
        }
        else
            {
                return false;
            }

    }


    public function get()
    {
        /*
            return data to maintain chaining methods so in the end we can return the object instead of output
            like $db->getList(['id', 'name'])->where('id = 23')->paginate(60);
        */
    }

  

    public function rawSql($rawSqlString)
    {
        $this->sqlSyntax = $rawSqlString;
        $this->runQuery();
        return $this;
    }

    public function sanitize($colums)
    {


        foreach ($colums as $key => $value) {
            if(isset($_POST[$value]))
            {
                $data[$value] = mysqli_real_escape_string($this->connection, $_POST[$value]);  
            }
        }

        return $data;

    }



    public function build($queryType)
    {

        switch($queryType)
        {

            case "S":
                $string = "SELECT ";
                break;
            case "I":
                $string = "INSERT INTO ";
                break;
            case "D": 
                $string = "DELETE FROM {$this->table} ";
                break;
            default:
                $string = "SELECT ";

        }


        $this->sqlSyntax = $string;
        return $this;

    }


    public function Colums($cols = '*')
    {
        $string = $this->sqlSyntax;
        $string .= $cols . " ";
        $string .= "FROM {$this->table}";
        $this->sqlSyntax = $string;
        return $this;
    }


    public function Where($criteria)
    {
        $string = $this->sqlSyntax;

        if ( strpos($this->sqlSyntax, 'WHERE') ) {

            $string .= ' AND ' . $criteria . " ";

        }

        else 

        {

            $string .= ' WHERE ' . $criteria . " "; 

        }

        $this->sqlSyntax = $string;

        return $this;

    }


    public function paginate($limit, $offset)
    {
        $string = $this->sqlSyntax;

        $string .= " LIMIT ". $limit .' OFFSET '. $offset;

        $this->sqlSyntax = $string;

        return $this;

    }

    public function Limit($limit)
    {

        $string = $this->sqlSyntax;

        $string .= ' LIMIT ' . $limit;

        $this->sqlSyntax = $string;

        return $this;

    }

    public function go()
    {
        $this->runQuery();
        return $this;
    }

    public function showQuery()
    {
        return $this->sqlSyntax;
    }

}