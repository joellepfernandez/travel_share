<?php
class User {
    public function find_all_users(){
        global $database;
        
        $result_set = $database->query("SELECT * FROM users");
        return $result_set;
    }
    
    public function query($sql){
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }
    
    private function confirm_query($result){
        if(!$result){
            die("Query Failed".$this->connection->error);
        }
    }
    
    public function escape_string($string){
        $escaped_string = $this->connection->real_escape_string($string);
        return  $escaped_string;
    }
    
    public function the_insert_id(){
        return $this->connection->insert_id;
    }
}
?>