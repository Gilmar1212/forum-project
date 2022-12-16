<?php
session_start();
include("../connection/connect-db.php");
class Process_login extends Connect_db {
    public $fetch;
    //Validate errors of equals login and password and empty input
    public function loginVerify(){
        $this->fetch = Process_login::select("*", "cadastro",false,false);
        while($register = mysqli_fetch_assoc($this->fetch)){
            while($register["login"] == $_POST["login"] && $register["senha"] == $_POST["senha"]){
             $_SESSION['login']= $_POST["login"];
             $_SESSION['id']= $register["id_usuario"];
                return header("Location:../view/view-user-area.php");
                break;
            }
       
       }
       return header("Location:../view/view-login-error.php");
   }
}
$login = new Process_login();

$login->loginVerify();

?>