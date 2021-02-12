<?php
class Category {
        protected $Conn;

        public function __construct($Conn){
            $this->Conn = $Conn;
        }

        public function getAllCategories() {
            // This function will initiate a basic query to our recipe_categories table and return any results.
            $query = "SELECT * FROM recipe_categories ORDER BY cat_name ASC";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>
