<?php



class User {

    public $user_id;
    public $username;
    public $email;
    public $image;

    public function __construct($user_id,$username,$email,$image){
        $this->user_id = $user_id;
        $this->username = $username;
        $this->email = $email;
        $this->image = $image;
    }
        
    public static function login($login, $password){
        include DOCUMENT_ROOT . '/config.php';

        if( $result = $database->get('users',array("username"=>$login)) ){
            $result = $result[0];
            if(password_verify($password,$result['password'])){
                session_start();
                error_reporting(0);
                $database->update('users',array("user_id"=>$result['user_id']),array('last_login'=>date("Y-m-d H:i:s")));
                $_SESSION['user-data'] = new User($result['user_id'],$result['username'],$result['email'],$result['image']);
                return 1;
            }
            return 0;
        }
        else if( $result = $database->get('users',array("email"=>$login)) ){
            $result = $result[0];
            if(password_verify($password,$result['password'])){
                session_start();
                error_reporting(0);
                $_SESSION['user-data'] = new User($result['user_id'],$result['username'],$result['email']);
                return 1;
            }
            return 0;
        }
        return 0;
    }

    public static function register($username,$email,$password) {
        include DOCUMENT_ROOT . '/config.php';
        
        if(sizeof($database->get('users',array("username"=>$username)))<1 || sizeof($database->get('users',array("email"=>$email)))<1){
            $password_enc = password_hash($password,PASSWORD_BCRYPT,["cost"=>12]);
            $user_id = uniqid("user",false);
            if($database->insert(array('user_id'=>$user_id,'username'=>$username,'email'=>$email,'password'=>$password_enc),'users')){
                return 1;
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }

    public static function logout(){
        session_start();
        error_reporting(0);
        session_destroy();
        $_SESSION['user-data']=null;
        return 1;
    }

    public static function checkLogin(){
        session_start();
        error_reporting(0);
        if(isset($_SESSION['user-data']) && $_SESSION['user-data']==null){
            return 0;
        }
        if(!isset($_SESSION['user-data'])){
            return 0;
        }
        return 1;
    }

    public static function generateNewPasswordToken($email){
        include DOCUMENT_ROOT . '/config.php';
        $token = bin2hex(random_bytes(6));
        if( $result = $database->get('users',array("email"=>$email)) ){

            

            if($database->update('users',array("email"=>$email),array('password_token'=>$token))){
                if(mail($email,"Cod resetare parola","
                Salut,\n\nCodul pentru resetarea parolei este - ".$token)){
                    return 1;
                }
                else{
                    return 0;
                }
                
            }
        }
        return 0;
    }

    public static function setNewPassword($password, $token){
        include DOCUMENT_ROOT . '/config.php';
        
        $password_enc = password_hash($password,PASSWORD_BCRYPT,["cost"=>12]);
        if($database->update('users',array("password_token"=>$token),array("password_token"=>null,"password"=>$password_enc))){
            return 1;
        }
        
        return 0;
    }
    public static function changePassword($password,$userid){
        include DOCUMENT_ROOT . '/config.php';
        
        $password_enc = password_hash($password,PASSWORD_BCRYPT,["cost"=>12]);
        if($database->update('users',array("user_id"=>$userid),array("password_token"=>null,"password"=>$password_enc))){
            return 1;
        }
        
        return 0;
    }
    
}