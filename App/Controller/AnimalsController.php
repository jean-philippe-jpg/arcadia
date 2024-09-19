<?php

namespace App\Controller;

use App\Repository\AnimalsRepository;



class AnimalsController extends Controller{

  public function route(): void {

    try {
      if (isset($_GET['action'])){

          switch($_GET['action']){

              case 'show':

                  $this->show();
                  
                  break;
              case 'create':

                  $this->create();

                  break;
              case 'read':
                  $this->read();
                 
                  break;
                  case 'delete':
                     $this->delete();

                  break;
                  case 'update':
                      $this->update();
                     
                  break;
                  case 'delete':
                      var_dump('chargement de pagescontroller');
                     

              default:
              throw new \Exception('page introuvable :/');
                break;
      }
      }  else {
          throw new \Exception('erreur de controller');
          
      }
    } catch(\Exception $e){
      echo $e->getMessage();
      $this->render('errors/errors', [
          'errors' => $e->getMessage()
      ]);

    }

              }


              
              protected function show()
              
              {
                  try {
                      if(isset($_GET['id'])){

                          $id = $_GET['id'];
                          // charger l'id d'un element avec le repository//

                          $habitatRrepository = new AnimalsRepository();
                          $habitation = $habitatRrepository->findOneById($id);

                          $this->render('/Admin/Animals/show', [

                              'logement' => $habitation,
                              
                                       
                              ] );
                         

                      } else {
                          throw new \Exception('id introuvable');

                      }
                     

                  } catch(\Exception $e){
                      $this->render('errors/errors', [
                          'errors' => $e->getMessage()

                      ]);}
              
                      
                          //require_once 'templates/showanimals.php';//
                
              }

              protected function create()
              
              {
                      try {     
                      $habitatRrepository = new AnimalsRepository();
                      $habitatRrepository->createAnimals();

                      $this->render('/Admin/Animals/create', [
                              
                                    
                          ] );

                      } catch(\Exception $e ) {
                          $this->render('errors/errors', [
                              'errors' => $e->getMessage()
  
                          ]);


                      }
                  
                      // charger l'id d'un element avec le repository//

                      
                          //require_once 'templates/showanimals.php';//    
                 
              }

              protected function read()
              
              {
                      try {       
                          
                              $habitatRrepository = new AnimalsRepository();
                             $read = $habitatRrepository->readAnimals();
                             //$race=$habitatRrepository->innerRaceAnimals();
                              
                              $this->render('/Admin/Animals/read', [

                                  
                                  'read' => $read
                                  
                                   ] );
       
                           

                      } catch(\Exception $e ) {
                          $this->render('errors/errors', [
                              'errors' => $e->getMessage()
  
                          ]);


                      }   
                 
              }

              protected function delete()
              
              {
                      try {       

                          if(isset($_GET['suprimer'])){
                              $id = $_GET['suprimer'];
                              $habitatRrepository = new AnimalsRepository();
                              $read = $habitatRrepository->deleteAnimals($id);
                          }
                          
                              $this->render('/Admin/Habitat/read', [

                                  'read' => $read
                                  
                                   ] );
       
                           

                      } catch(\Exception $e ) {
                          $this->render('errors/errors', [
                              'errors' => $e->getMessage()
  
                          ]);


                      }   
                 
              }
              

              protected function update()
              
              {
                      try {       

                          if(isset($_GET['modify'])){

                              $id = $_GET['modify'];
                              $habitatRrepository = new AnimalsRepository();
                              $read = $habitatRrepository->updateAnimals($id);

                              $this->render('/Admin/Habitat/read', [

                                  'read' => $read
                        
                         ] );
                             
                              } else {
                                  throw new \Exception('modification impossible :/');
  
                              }
                          
                        
       
                           

                      } catch(\Exception $e ) {
                          $this->render('errors/errors', [
                              'errors' => $e->getMessage()
  
                          ]);


                      }   
                 
              }
              

}


