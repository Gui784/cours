<?php 

Class Orders{

    public $db;

        public function __construct( PDO $db){

            $this->db = $db;

        }

        public function newOrder($post , $session){

            extract($post);

            $id_user = $session['id_user'];

            $quantity = 1;

            $sql = $this->db->prepare("INSERT INTO orders (`id_article` , `id_user` , `quantity`) VALUES (:id_article , :id_user , :quantity)");

            $sql->bindParam(':id_article' , $id_article , PDO::PARAM_INT);
            $sql->bindParam(':id_user' , $id_user , PDO::PARAM_INT);
            $sql->bindParam(':quantity' , $quantity , PDO::PARAM_INT);

            $sql->execute();

        }

        public function cartOrder($session){

        $id_user = $session['id_user'];

        $cart = $this->db->prepare('SELECT * FROM orders INNER JOIN article ON orders.id_article = article.id_article WHERE orders.id_user = :id_user');
        
        $cart->bindParam(':id_user' , $id_user ,PDO::PARAM_INT);
        $cart->execute();

        return $cart->fetchAll(PDO::FETCH_ASSOC);

        }

        public function deleteOrder($post){

            extract($post);

            $cart = $this->db->prepare("DELETE FROM orders WHERE `id_order` = :id_order");
            $cart->bindParam(":id_order" , $id_order , PDO::PARAM_INT);

            $cart->execute();

            $success = " Produit supprimer du panier avec succés ";

            return $success ;


        }

           public function setQuantity(){

            $cart = $this->db->prepare("UPDATE orders SET `quantity` = :quantity WHERE `id_order` = :id_order");

            $cart->bindParam(":quantity" , $quantity , PDO::PARAM_INT);
            $cart->bindParam(":id_order" , $id_order , PDO::PARAM_INT);

            $cart->execute();
        
           }

}

?>