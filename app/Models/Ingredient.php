<?php

require __DIR__."/../Utils/Database.php" ;

class Ingredient {
    private  $id ;
    private  $name ;
    private  $unite ;

    public function find($ingredientId)
	{
		$sql = "SELECT ingredients.* FROM ingredients WHERE id=$ingredientId";
		$pdo = Database::getPDO();
		$pdoStatement = $pdo->query($sql);
		$ingredient = $pdoStatement->fetchObject('Ingredient');
		return $ingredient;
	}
	

    public function findAll(){
            $sql = 'SELECT ingredients.* FROM ingredients';
            $pdo = Database::getPDO();
            $pdoStatement = $pdo->query($sql);
            $ingredientsList = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'Ingredient');
            dump($ingredientsList) ;
            return $ingredientsList;

        }











    /**
     * Get the value of unite
     */ 
    public function getUnite()
    {
        return $this->unite;
    }

    /**
     * Set the value of unite
     *
     * @return  self
     */ 
    public function setUnite($unite)
    {
        $this->unite = $unite;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}