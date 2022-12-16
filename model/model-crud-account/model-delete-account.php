<?php 
    include("../../connection/connect-db.php");
    class DeleteAccount extends Connect_db{
        public $select;
        public function deleteOcurrence(){
            $this->select = DeleteAccount::select("*","cadastro",false,false);

            while($fetch = mysqli_fetch_assoc( $this->select)){
                echo "<a href=delete-account.php?id={$fetch['id_usuario']}>{$fetch['id_usuario']} {$fetch['login']}</a><br>";
                $id_filtered =filter_input(INPUT_GET,'id');

                if($fetch['id_usuario'] == $id_filtered  ){
                    $delete = "DELETE FROM cadastro WHERE id_usuario={$id_filtered}";
                    mysqli_query(DeleteAccount::connect(), $delete);
                }
                
            }
        }
       
    }
    $delete = new DeleteAccount();
    echo $delete->deleteOcurrence();
?>