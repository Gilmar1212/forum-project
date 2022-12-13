<?php
session_start();
 include("../../connection/connect-db.php");
    class UpdateAccount extends Connect_db{
        Private $id;
        public function teste(){
            $select = UpdateAccount::select("id_usuario","cadastro",true,158);
            while($fetch = mysqli_fetch_assoc($select)){
                echo $fetch['id_usuario'];
            }
        }        
    }
    $teste = new UpdateAccount();

    $teste->teste();
    session_destroy();
?>