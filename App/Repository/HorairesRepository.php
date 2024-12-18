<?php

namespace App\Repository;

use App\Bdd\Mysql;
use App\Entity\Horaires;

use App\Tools\StringTools;


class HorairesRepository {

    public function findOneById( int $id)
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT h.id as id, h.name as name, h.description as description, a.first_name as first_name FROM habitat h
                INNER JOIN animals a ON h.animals_list = a.id where h.id = :id');   
        $query->bindParam(':id', $id, $pdo::PARAM_INT);
       
        
        if($query->execute()){

            $query->setFetchMode($pdo::FETCH_CLASS, Horaires::class);

            return $query->fetch(); 
    }
}

    public function create( ){

                try{
                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                  
                
    
                $stmt = $pdo->prepare('INSERT INTO horaires (horaires, date, close) VALUES (:horaires, :date, :close)');
                $stmt->bindParam(':date', $sanitized_date, $pdo::PARAM_STR);
                $stmt->bindParam(':horaires', $sanitized_ouverture, $pdo::PARAM_STR);
                $stmt->bindParam(':close', $sanitized_fermeture, $pdo::PARAM_STR);

                    if(!isset($_POST['date'])) {


                    } else {
                $date = $_POST['date'];
                $sanitized_date = htmlspecialchars($date, ENT_QUOTES | ENT_HTML5, 'UTF-8');
                $ouverture = $_POST['ouverture'];
                $sanitized_ouverture = htmlspecialchars($ouverture, ENT_QUOTES | ENT_HTML5, 'UTF-8');
                $fermeture = $_POST['fermeture'];
                $sanitized_fermeture = htmlspecialchars($fermeture, ENT_QUOTES | ENT_HTML5, 'UTF-8');
             
                if(!$stmt->execute()){
                    echo 'erreur d\'insertion';
                } else {

                    echo 'race rcréée!';
                } 
            }
            } catch(\Exception $e){
                echo 'erreur d\'insertion'. $e->getMessage();
            }
    }

    public function read(){

        try{

                $mysql = Mysql::getInstance();
                $pdo = $mysql->getPDO();
                $stmt = $pdo->prepare("SELECT * FROM horaires ");
                
                if($stmt->execute()){
                    
                    $stmt->setFetchMode($pdo::FETCH_CLASS, Horaires::class);
                    
                   return $stmt->fetchAll();
                  
                } else {
                    echo 'erreur';
                }
              
               
        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
        }


    public function update(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();
if (!isset($_POST['ouverture']) && !isset($_POST['fermeture'])) {

} else {
            $ouverture = $_POST['ouverture'];
           $fermeture = $_POST['fermeture'];
            
         
            $query = $pdo->prepare('UPDATE horaires set horaires = :horaires, close = :close WHERE id = :id');
            $query->bindParam(':id', $id, $pdo::PARAM_INT);
            $query->bindParam(':horaires',$ouverture , $pdo::PARAM_STR);
                $query->bindParam(':close', $fermeture , $pdo::PARAM_STR);
                

            
           
           

            
            $query->fetch($pdo::FETCH_ASSOC);
            $query->execute();
            
            
            return  $query;
            
}

        } catch(\Exception $e){
            echo 'erreur de modification'. $e->getMessage();
           

        }
       
    }


    public function delete(int $id){

        try{

            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();

            $query = $pdo->prepare('DELETE FROM horaires WHERE id = :id');
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
            $query->execute();
            
            return  $query;

        } catch(\Exception $e){
            echo 'erreur d\'insertion'. $e->getMessage();
           

        }
       
    }



}




