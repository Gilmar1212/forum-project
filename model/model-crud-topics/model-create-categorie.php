<?php
    
    include_once("../../connection/connect-db.php");

    class createPosts extends Connect_db{
        private $query;
        private $post_name;
        private $post_ranking;
        private $answers_posts;
        private $associate_post_categories;
        public function InsertTable(){
            $query = $this->query;
            $post_name = $this->post_name;
            $post_ranking = $this->post_ranking;
            $answers_posts = $this->answers_posts;
            $associate_post_categories = $this->associate_post_categories;
            
            $post_name = $_POST['post-name'];
            $post_ranking = $_POST['post-ranking'];
            $answers_posts = $_POST['answer-post'];
            
            if($post_name !==NULL && isset($post_name) && $post_ranking !==NULL &&  isset($post_ranking) && $answers_posts !==NULL && isset($answers_posts)){
                $select = "SELECT * FROM categoria";
                $select_exec = mysqli_query(createPosts::connect(),$select)or die("função não procedeu");
                while($result = mysqli_fetch_assoc($select_exec))
                $query = "INSERT INTO posts(`nome_post`,`ranking_post`,`respostas_post`,`id_categoria`) VALUES ('".$post_name."','".$post_ranking."','".$answers_posts."','".$result['id_categoria']."')";
                 mysqli_query(createPosts::connect(),$query)or die("função não procedeu");
            }       
        }
    }
   
    $teste = new createPosts();
    $teste->InsertTable();
?>