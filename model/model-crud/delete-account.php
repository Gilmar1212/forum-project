<?php 
    include("connect-db.php");
    class DeleteAccount extends Connect_db{
        public $select;
        public $query;
        public function deleteOcurrence(){
            $this->select = "SELECT * FROM cadastro";
            $this->query = mysqli_query(DeleteAccount::connect(), $this->select);
            while($fetch = mysqli_fetch_assoc($this->query)){
                echo "<a href=delete-account.php?id={$fetch['id_usuario']}>{$fetch['id_usuario']}</a><br>";
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