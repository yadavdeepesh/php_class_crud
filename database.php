<?php
class Database{
    private $db_host ="localhost";
    private $db_user ="root";
    private $db_pass ="1234";
    private $db_name ="testing";

    private $mysqli ="";
    private $conn = false;
    private $result = array();

    // database connection
    public function __construct() {
     if(!$this->conn){
        $this->mysqli = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
        $this->conn = true;
        if($this->mysqli->connect_error){
            array_push($this->result , $this->mysqli->connect_error);
            echo "error";
            return false;
        }
        echo "connect";
     }
     else{
        return true;
    }
   
    }
    

    // insert data to database
    public function insert($table,$params=array()){
     if($this->tableExists($table)){
        print_r($params);
        $table_keys = implode(', ',array_keys($params));
        $table_values = implode("', '",$params);
        echo "<br>";
        $sql = "INSERT INTO $table ($table_keys) VALUES ('$table_values')";
        if($this->mysqli->query($sql)){
            array_push($this->result,$this->mysqli->insert_id);
            return true;
        }
        else{
            array_push($this->result,$this->mysqli->error);
            return false;
        }
     }

    }
    // update data to database

    // delete data to database
    // select data to database

    // create function to check the given table is exits or not..

    private function tableExists($table){
        $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
        $tableInDb = $this->mysqli->query($sql);
        if($tableInDb){
            if($tableInDb->num_rows == 1){
                return true;
            }
            else{
                array_push($this->result,$table." does not exits in the database");
                return false;
            }
        }
    }

   // show result message  
   public function getResult(){
    $val = $this->result;
    $this->result = array();
    return $val;
   }
   // close connection
   public function __destruct()
   {
    if($this->conn){
        if($this->mysqli->close()){
            $this->conn = false;
            return true;
        }
    }
    else{
        return false;
       }
   }


}

?>