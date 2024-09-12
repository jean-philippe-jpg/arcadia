<?php

namespace App\Repository;


use App\Entity\Habitats;
use App\Bdd\Mysql;
use App\Tools\StringTools;

require_once 'App/Entity/Habitats.php';
class HabitatsRepository {


    public function findOneById( int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM habitat WHERE id = :id');
        $query->bindParam(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $habitat = $query->Fetch($pdo::FETCH_ASSOC);
   

        $habitatEntity = new Habitats();
        
        foreach($habitat as $key => $value){

            $habitatEntity->{'set'.StringTools::toPascaleCase($key) } ($value);
            /*if(method_exists($habitatEntity, $method)){
                $habitatEntity->$method($value);*/
            //}

            //$habitatEntity->{'set' .StringTools::toPascaleCase($key)}($value);

        return $habitat;
        
    }
}

    

    public function createHabitat( ){

                try{
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                  
                
    
                $stmt = $pdo->prepare('INSERT INTO habitat (name, description, animals_list) VALUES (:name, :description, :animals_list)');
                $stmt->bindParam(':name', $_POST['name'], $pdo::PARAM_STR);
                $stmt->bindParam(':description', $_POST['description'], $pdo::PARAM_STR);
                $stmt->bindParam(':animals_list', $_POST['animals_list'], $pdo::PARAM_INT);
                
                //$stmt->execute();
             

                
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
                $stmt = $pdo->prepare("SELECT * FROM habitat ");
                //$stmt->setFetchMode($pdo::FETCH_CLASS, 'Habitats');
                $stmt->fetch($pdo::FETCH_ASSOC);
                //$stmt->fetchAll();
                //$stmt->execute();


                if($stmt->execute()){
                    //$stmt->fetchObject('Habitats');
                    //$stmt->fetchAll();
                   //return $stmt->setFetchMode($pdo::FETCH_CLASS, 'Habitats');
                   return $stmt->fetchAll();
                  
                         

                } else {
                    echo 'erreur';
                }
              
               
               
             



                  
          

        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
        }


    public function updateHabitat(){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();
               
         
            $query = $pdo->prepare('UPDATE habitat set name = :name, description = :description WHERE id = :id');
            $query->bindParam(':id', $_POST['id'], $pdo::PARAM_INT);
            //$query->bindParam(':name', $name, $pdo::PARAM_STR);
            $query->bindParam(':description', $description, $pdo::PARAM_STR);
            $query->fetch($pdo::FETCH_ASSOC);
            $query->execute();
            
            return  $query;
         
           

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




