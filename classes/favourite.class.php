<?php
class Favourite {
    protected $Conn;

    public function __construct($Conn){
        $this->Conn = $Conn;
    }

    public function isFavourite($recipe_id){
        $query = "SELECT * FROM user_favs WHERE user_id = :user_id AND recipe_id = :recipe_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([
            "user_id" => $_SESSION['user_data']['user_id'],
            "recipe_id" => $recipe_id
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function toggleFavourite($recipe_id){
        // Check if recipe is already favourite
        $is_favourite = $this->isFavourite($recipe_id);

        if($is_favourite) {
            // Is already favourite - so remove.
            $query = "DELETE FROM user_favs WHERE fav_id = :fav_id";
            $stmt = $this->Conn->prepare($query);
            $stmt->execute([
                "fav_id" => $is_favourite['fav_id']
            ]);
            return false; // Return false for "removed"
        }else{
            // Is not favourite - so add
            $query = "INSERT INTO user_favs (user_id, recipe_id) VALUES (:user_id, :recipe_id)";
            $stmt = $this->Conn->prepare($query);

            return $stmt->execute(array(
                "user_id" => $_SESSION['user_data']['user_id'],
                "recipe_id" => $recipe_id
            ));
            return true; // Return false for "added"
        }
    }

    public function getAllFavouritesForUser(){
        $query = "SELECT * FROM user_favs LEFT JOIN recipes ON user_favs.recipe_id = recipes.recipe_id WHERE user_favs.user_id = :user_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([
            "user_id" => $_SESSION['user_data']['user_id']
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    


}
