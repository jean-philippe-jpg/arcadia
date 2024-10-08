<?php

namespace App\Repository;


use App\Entity\Habitats;
use App\Entity\Users;
use App\Entity\Animals;
use App\Bdd\Mysql;
use App\Tools\StringTools;
//use PDO;

//use PDO;

//require_once 'App/Entity/Habitats.php';
//require_once 'App/Entity/Habitats.php';
class HabitatsRepository {


    public function findOneById( int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT h.id as id, h.name as name, h.description as description, a.first_name as first_name FROM habitat h
                INNER JOIN animals a ON h.animals_list = a.id where h.id = :id');   
        $query->bindParam(':id', $id, $pdo::PARAM_INT);
        
            if($query->execute()){

               $query->setFetchMode($pdo::FETCH_CLASS, Habitats::class);

                return $query->fetch();

            } 


        //$habitatEntity = new Habitats();
        
        /*foreach($habitat as $key => $value){

            $habitatEntity->{'set'.StringTools::toPascaleCase($key) } ($value);
            //if(method_exists($habitatEntity, $method)){
                //$habitatEntity->$method($value);
            //}

            //$habitatEntity->{'set' .StringTools::toPascaleCase($key)}($value);

        return $habitat;
        
    }*/


/*public function innerRaceAnimals( ){

    try{
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();
      
    $stmt = $pdo->prepare('SELECT * FROM habitats INNER JOIN  ON animals.race = race.id') ;
    
    $stmt->fetch($pdo::FETCH_ASSOC);
    if($stmt->execute()){
        return $stmt->fetch();
    } 

} catch(\Exception $e){
    echo 'erreur d\'insertion'. $e->getMessage();
}
}*/


        }

    public function createHabitat( ){

                try{
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                  
                
    
                $stmt = $pdo->prepare('INSERT INTO habitat (name, description, animals_list) VALUES (:name, :description, :animals_list)');
                $stmt->bindParam(':name', $_POST['name'], $pdo::PARAM_STR);
                $stmt->bindParam(':description', $_POST['description'], $pdo::PARAM_STR);
                $stmt->bindParam(':animals_list', $_POST['animals_list'], $pdo::PARAM_INT);

                if($stmt->execute()){
                    echo 'insertion reussie';
                } else {
                    echo 'erreur d\'insertion';
                }
    
            } catch(\Exception $e){
                echo 'erreur d\'insertion'. $e->getMessage();
            }

            }

           
    public function readHabitat(){

        try{

                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                $stmt = $pdo->prepare("SELECT h.id as id, h.name as name, h.description as description, a.first_name as first_name FROM habitat h
                INNER JOIN animals a ON h.animals_list = a.id");
                
                if($stmt->execute()){
                    
                    $stmt->setFetchMode($pdo::FETCH_CLASS, Habitats::class);

              
                    return $stmt->fetchAll();
        
                } else {
                    echo 'erreur';
                }
              
               
        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
    }


    public function updateHabitat(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();
               
                $name = $_POST['name'];
                $description = $_POST['description'];
                $animals = $_POST['animals'];
            
                //$last_name = $_POST['last_name'];


                $update = $pdo->prepare('UPDATE habitat set name = :name, description = :description, animals_list = :animals  WHERE id = :id');
                $update->bindParam(':id', $id, $pdo::PARAM_INT);
                //$query->bindParam(':name', $name, $pdo::PARAM_STR);
                $update->bindParam(':description', $description, $pdo::PARAM_STR);
                $update->bindParam(':name', $name, $pdo::PARAM_STR);
                $update->bindParam(':animals', $animals, $pdo::PARAM_STR);
                $update->fetch($pdo::FETCH_ASSOC);


                if($update->execute()){
                      
                    $update->fetch();
                  echo 'modification reussie';
            } else {
                echo 'modification echouée';
            }
            
            return  $update;
         
 
        
                 

        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
    }


    public function deleteHabitat(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();

            $query = $pdo->prepare('DELETE FROM habitat WHERE id = :id');
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
            $query->execute();
            
            return  $query;

        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
    }



}




