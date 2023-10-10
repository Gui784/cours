<?php 

Class Article{

    public $db;



    public function __construct( PDO $db)
    {
        
        $this->db = $db;

    } 

    public function selectAll(){

        $selectAllArticle = $this->db->prepare("SELECT * FROM `article` ");

        $selectAllArticle->execute();

        $articles = $selectAllArticle->fetchAll(PDO::FETCH_ASSOC);

        return $articles;

    }

       public function limitArticle($limit){


        $selectlimitArticle = $this->db->prepare("SELECT * FROM `article` ORDER BY `id_article` DESC LIMIT $limit ");

        $selectlimitArticle->execute();

        $limitArticle = $selectlimitArticle->fetchAll(PDO::FETCH_ASSOC);

        return $limitArticle;


       }

    public function selectbyId($id_article){

        
        $idArticle = $id_article;

        $selectArticleID = $this->db->prepare("SELECT * FROM `article` WHERE `id_article` = :id_article ");

        $selectArticleID->bindParam(':id_article', $idArticle, PDO::PARAM_INT);

        $selectArticleID->execute();

        $article = $selectArticleID->fetch(PDO::FETCH_ASSOC);

        return $article;

    }

    
    
    public function insert($form , $files){

        extract($form);

        $image = $_FILES['image']['name'];

        $insertArticle = $this->db->prepare("INSERT INTO article (`title`, `price` , `image`) VALUES (:title, :price , :image)");

        $insertArticle->bindParam(':title', $title, PDO::PARAM_STR);
        $insertArticle->bindParam(':price', $price, PDO::PARAM_INT);
        $insertArticle->bindParam(':image', $image);

        $insertArticle->execute();

        $file_tmp_name = $_FILES['image']['tmp_name'];
        $folder = "images/upload/";
        $file_dest = $folder . $image;
        move_uploaded_file($file_tmp_name, $file_dest);

        
    } 

       public function articleSession($form){

        // // $form = $_POST (formulaire caché)

        if(!array_key_exists('orders' , $_SESSION)){

           $_SESSION['orders'] = array();

        }

        $_SESSION['orders'] = array_merge($_SESSION['orders'] , array($form));

        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";


       }

}
