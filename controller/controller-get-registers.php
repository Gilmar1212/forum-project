<?php   include_once("connection/connect-db.php");

    class returnRegisters{
        private $ocurrence_query;
        public function getRegister(){
           $connect = new Connect_db();
         $this->ocurrence_query = "SELECT * FROM posts INNER JOIN categoria ON posts.id_categoria = categoria.id_categoria";
          $select_exec = mysqli_query($connect->connect(),$this->ocurrence_query)or die("função não procedeu");
   
            while($result = mysqli_fetch_assoc($select_exec)){
                  echo $result['nome_post']."<br>"; 
           }
        }
    }
    ?>