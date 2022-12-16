<?php
session_start();
include("../connection/connect-db.php");
    class UpdateAccount extends Connect_db{
        Private $new_pass;
        Private $id;
        public function mountFormUpdate(){
            $select = UpdateAccount::select("*","cadastro",false,false);
            while($fetch = mysqli_fetch_assoc($select)){
                
                $new_pass= $this->new_pass = $_POST['update-pass'];
                $id =$this->id = $_SESSION['id'];
                
                mysqli_query(UpdateAccount::connect(), "UPDATE cadastro SET senha={$new_pass} WHERE id_usuario={$id}") or die("Não foi possivel realizar");
     
              break;
            }
        }        
    }
    $teste = new UpdateAccount();
    $teste->mountFormUpdate();
    session_destroy();
?>