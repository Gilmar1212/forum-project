<?php
session_start();
include("../connection/connect-db.php");
class Process_login extends Connect_db {
    public $fetch;
    //Validate errors of equals login and password and empty input
    public function loginVerify(){
        $this->fetch = mysqli_query(Process_login::connect(),"SELECT * FROM cadastro");
        while($register = mysqli_fetch_assoc($this->fetch)){
            while($register["login"] == $_POST["login"] && $register["senha"] == $_POST["senha"]){
             $_SESSION['login']= $_POST["login"];
                return header("Location:../view/login-sucess.php");
                break;
            }
            
       }
       return header("Location:../view/view-login-error.php");

   }
}
$login = new Process_login();

$login->loginVerify();
?>