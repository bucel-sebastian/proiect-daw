<?php



class User {
    protected $_email;
    protected $_password;
    
    Static public function login($login, $password){
        include DOCUMENT_ROOT . '/config.php';
        
        if( $result = $database->get('users',array("username"=>$login)) ){
            if(password_verify($password,$result['password'])){
                return 1;
            }
            return 0;
        }
        else if( $result = $database->get('users',array("email"=>$login)) ){
            if(password_verify($password,$result['password'])){
                return 1;
            }
            return 0;
        }
        return 0;
    }

    function logout(){

    }

}