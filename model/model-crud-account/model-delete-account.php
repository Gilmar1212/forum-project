<?php 
    include("../connection/connect-db.php");
    include_once("../interfaces/super-interface.php");
    class DeleteAccount extends Connect_db implements iDelete{
        public $select;
        public function Delete(){
            $this->select = DeleteAccount::select("*","cadastro",false,false);

            while($fetch = mysqli_fetch_assoc( $this->select)){
                echo "<a href=view-user-area.php?id={$fetch['id_usuario']}>ID:{$fetch['id_usuario']} Nome:{$fetch['login']}</a><br>";
                $id_filtered =filter_input(INPUT_GET,'id');

                if($fetch['id_usuario'] == $id_filtered  ){
                    $delete = "DELETE FROM cadastro WHERE id_usuario={$id_filtered}";
                    mysqli_query(DeleteAccount::connect(), $delete);
                }
                
            }
        }
       
    }
    $delete = new DeleteAccount();
    echo $delete->Delete();
?>