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

        $table_columns = '';
        $table_values = '';
        foreach ($variables as $key => $value) {
            if($key === array_key_last($variables)){
                $table_columns .= '`' . $key . '`';
                $table_values .= '\'' . $value . '\'';
            }
            else{
                $table_columns .= '`'.$key.'`,';
                $table_values .= '\'' . $value . '\',';
            }
        }
        $sql_query = "INSERT INTO `" . $table_name . "`(" . $table_columns . ") VALUES (" . $table_values . ")";

        if(mysqli_query($this->connection,$sql_query)){
            return 1;
        }
        else{
            return $this->connection->error;
        }
    }

    function get(string $table_name, array $filters=null){
        $sql_query = "SELECT * FROM `" . $table_name . "`";
        if($result = mysqli_query($this->connection,$sql_query)){
            $array_of_results = array();
            while($row = mysqli_fetch_assoc($result)){
                $tmp_row_array = array();
                foreach ($row as $key => $value) {
                    $tmp_row_array += [$key=>$value];
                }
                array_push($array_of_results,$tmp_row_array);
            }
            return $array_of_results;
        }
        else{
            return $this->connection->error;
        }
    }

    static public function update(string $table_name, array $where, array $variables){
        $update_values = '';
        foreach ($variables as $key => $value) {
            if($key === array_key_last($variables)){
                $update_values .= '`' . $key . '`=\'' . $value . '\'';
            }
            else{
                $update_values .= '`' . $key . '`=\'' . $value . '\',';
            }
        }
        $sql_query = "UPDATE `" . $table_name . "` SET " . $update_values . " WHERE ";
        if(mysqli_query($this->connection,$sql_query)){
            return 1;
        }
        else{
            return $this->connection->error;
        }
    }

    static public function remove(string $table_name, array $where){
        $sql_query = "DELETE FROM `" . $table_name . "` WHERE 0";
    }

}