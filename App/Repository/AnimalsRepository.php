<?php

namespace App\Repository;


use App\Entity\Animals;
use App\Bdd\Mysql;
use App\Tools\StringTools;


  class AnimalsRepository {


    public function findOneById( int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT a.id as id, a.first_name as first_name, r.name as race_name FROM animals a
                INNER JOIN race r ON a.race = r.id where a.id = :id');   
        $query->bindParam(':id', $id, $pdo::PARAM_INT);
        
                if($query->execute()) {

                    $query->setFetchMode($pdo::FETCH_CLASS, Animals::class);
                    return $query->fetch();

                }
        
    }

    



    public function createAnimals( ){

                try{
                    $mysql = Mysql::getInstance();
                    $pdo = $mysql->getPDO();
                      
                
    
                $stmt = $pdo->prepare('INSERT INTO animals (first_name, race, habitat, state) VALUES (:first_name, :race, :habitat, :state)');
                $stmt->bindParam(':first_name', $_POST['name'], $pdo::PARAM_STR);
                $stmt->bindParam(':race', $_POST['race'], $pdo::PARAM_INT);
                $stmt->bindParam(':habitat', $_POST['home'], $pdo::PARAM_INT);
                $stmt->bindParam(':state', $_POST['state'], $pdo::PARAM_INT);
             
                if(!$stmt->execute()){
                    echo 'erreur d\'insertion';
                } 
    
            } catch(\Exception $e){
                echo 'erreur d\'insertion'. $e->getMessage();
            }
    }

    /*public function innerRaceAnimals( ){

        try{
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
          
        $stmt = $pdo->prepare('SELECT * FROM animals INNER JOIN race ON animals.race = race.id') ;
        
        $stmt->fetch($pdo::FETCH_ASSOC);
        if($stmt->execute()){
            return $stmt->fetch();
        } 

    } catch(\Exception $e){
        echo 'erreur d\'insertion'. $e->getMessage();
    }
}*/

    public function readAnimals(){

        try{

                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                $stmt = $pdo->prepare("SELECT a.id as id, a.first_name as first_name, a.race as race, a.habitat as home, a.state as state, r.name as namerace, h.name as home, a_s.state as state FROM animals a
                INNER JOIN race r ON a.race = r.id JOIN habitat h ON a.habitat = h.id JOIN animals_state a_s ON a.state = a_s.id");
               
                if($stmt->execute()){

                    $stmt->setFetchMode($pdo::FETCH_CLASS, Animals::class);
                    
                   return $stmt->fetchAll();
                  
                } else {
                    echo 'erreur';
                }
              
               
        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
        }


    public function updateAnimals(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();
               
         
            $query = $pdo->prepare('UPDATE animals set first_name = :name, race = :race, habitat = :home, state = :state WHERE id = :id');
            $query->bindParam(':id',$id, $pdo::PARAM_INT);
            $query->bindParam(':name', $_POST['name'], $pdo::PARAM_STR);
            $query->bindParam(':race', $_POST['race'], $pdo::PARAM_INT);
            $query->bindParam(':home', $_POST['home'], $pdo::PARAM_STR);
            $query->bindParam(':state', $_POST['state'], $pdo::PARAM_INT);
            //$query->bindParam(':name', $name, $pdo::PARAM_STR);
            //$query->bindParam(':description', $description, $pdo::PARAM_STR);
            if( $query->execute()){

                $query->setFetchMode($pdo::FETCH_CLASS, Animals::class);

                //$query->fetch();

                echo 'modification éffectuée';

            } else {

                echo 'erreur de modification';
            }
           
            
            return  $query;
         
           

        } catch(\Exception $e){
            echo 'modification impossible'. $e->getMessage();
           

        }
       
    }


    public function deleteAnimals(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();

            $query = $pdo->prepare('DELETE FROM animals WHERE id = :id');
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
            $query->execute();
            
            return  $query;

        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
    }


    


}




