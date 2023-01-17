<?php

class Database {

    protected $connection;

    public function __construct(string $db_host = 'localhost', string $db_username = 'root', string $db_password = '', string $db_name = ''){
        $this->connection = new mysqli($db_host, $db_username, $db_password, $db_name);
        if( $this->connection->connect_error ){
            $this->error('Conexiunea la baza de date a esuat - ' . $this->connection->connect_error);
        }
        // $this->connection->set_charset($charset);
    }

    function insert(array $variables, string $table_name) {
        $table_columns = array();
        $table_values = array();

        foreach ($variables as $key => $value) {
            array_push($table_columns,'`' . $key . '`');
            array_push($table_values,'\'' . $value . '\'');
        }

        $table_columns = implode(",",$table_columns);
        $table_values = implode(",",$table_values);

        $sql_query = "INSERT INTO `" . $table_name . "`(" . $table_columns . ") VALUES (" . $table_values . ")";

        if(mysqli_query($this->connection,$sql_query)){
            return 1;
        }
        else{
            return $this->connection->error;
        }
    }

    function get(string $table_name, array $filters=null){
        if(null === $filters){
            $sql_query = "SELECT * FROM `" . $table_name . "`";
        }
        else{
            $table_where = array();
            foreach ($filters as $key => $value) {
                array_push($table_where, '`' . $key . '`=\'' . $value . '\'');
            }
            $table_where = implode(' AND ', $table_where);
            $sql_query = "SELECT * FROM `" . $table_name . "` WHERE " . $table_where;
        }
        if($result = mysqli_query($this->connection,$sql_query)){
            $array_of_results = array();
            while($row = mysqli_fetch_assoc($result)){
                $tmp_row_array = array();
                foreach ($row as $key => $value) {
                    $tmp_row_array += [$key=>$value];
                }
                array_push($array_of_results,$tmp_row_array);
            }
            if(sizeof($array_of_results) === 1){
                return $array_of_results[0];
            }
            return $array_of_results;
        }
        else{
            return $this->connection->error;
        }
    }

    static public function update(string $table_name, array $where, array $variables){
        $update_values = array();
        foreach ($variables as $key => $value) {
            array_push($update_values,'`' . $key . '`=\'' . $value . '\'');
        }

        $update_where = array();
        foreach ($where as $key => $value) {
            array_push($update_where,'`' . $key . '` = \'' . $value . '\'');
        }

        $update_values = implode(",", $update_values);
        $update_where = implode(' AND ', $update_where);

        $sql_query = "UPDATE `" . $table_name . "` SET " . $update_values . " WHERE " . $update_where;
        if(mysqli_query($this->connection,$sql_query)){
            return 1;
        }
        else{
            return $this->connection->error;
        }
    }

    static public function delete(string $table_name, array $where){
        $table_where = array();
        foreach ($where as $key => $value) {
            array_push($table_where,'`' . $key . '` = \'' . $value . '\'');
        }
        $table_where = implode(' AND ', $table_where);
    
        $sql_query = "DELETE FROM `" . $table_name . "` WHERE ".$table_where;
        if(mysqli_query($this->connection,$sql_query)){
            return 1;
        }
        else{
            return $this->connection->error;
        }
    }

}