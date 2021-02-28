<?php
class Recipe
{
    protected $Conn;
    public function __construct($Conn)
    {
        $this->Conn = $Conn;
    }

    public function addRecipe($data)
    {
        $query = "INSERT INTO recipes (cat_id, user_id, recipe_name, recipe_image, recipe_time, recipe_servings, recipe_budget, recipe_instructions) VALUES (:cat_id, :user_id, :recipe_name, :recipe_image, :recipe_time, :recipe_servings, :recipe_budget, :recipe_instructions)";
        $stmt = $this->Conn->prepare($query);
        $data['user_id'] = $_SESSION['user_data']['user_id'];

        return $stmt->execute($data);
    }

    public function getAllRecipesForCategory($category_id)
    {
        $query = "SELECT * FROM recipes WHERE cat_id = :cat_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([
            "cat_id" => $category_id
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getRecipe($recipe_id)
    {
        $query = "SELECT * FROM recipes WHERE recipe_id = :recipe_id";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([
            "recipe_id" => $recipe_id
        ]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function searchRecipes($query_string)
    {
        $query = "SELECT * FROM recipes WHERE recipe_name LIKE :query_string";
        $stmt = $this->Conn->prepare($query);
        $stmt->execute([
            "query_string" => "%".$query_string."%"
        ]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        
    }

}
