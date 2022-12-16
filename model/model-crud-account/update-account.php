<?php
session_start();
 include("../../connection/connect-db.php");
    class UpdateAccount extends Connect_db{
        Private $id;
        public function teste(){
            $select = UpdateAccount::select("*","cadastro",false,false);
            while($fetch = mysqli_fetch_assoc($select)){
                echo $fetch['login'];
            }
        }        
    }
    $teste = new UpdateAccount();
    $teste->teste();
    session_destroy();
?>