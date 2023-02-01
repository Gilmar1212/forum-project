<?php
    
    include_once("../../connection/connect-db.php");

    class createTopics extends Connect_db{
        private $query;
        private $topic_name;
        private $topic_ranking;
        private $answers_topics;
        public function InsertTable(){
            $query = $this->query;
            $topic_name = $this->topic_name;
            $topic_ranking = $this->topic_ranking;
            $answers_topics = $this->answers_topics;

            $topic_name = $_POST['topic-name'];
            $topic_ranking = $_POST['topic-ranking'];
            $answers_topics = $_POST['answer-topic'];
            
            if($topic_name !==NULL && isset($topic_name) && $topic_ranking !==NULL &&  isset($topic_ranking) && $answers_topics !==NULL && isset($answers_topics)){
                $query = "INSERT INTO topicos(`nome_topico`,`ranking_topico`,`respostas_topico`) VALUES ('".$topic_name."','".$topic_ranking."','".$answers_topics."')";
                 mysqli_query(createTopics::connect(),$query)or die("função não procedeu");
            }else{
                echo"deu ruim";
            }            
        }
    }
   
    $teste = new createTopics();
    $teste->InsertTable();
?>