<?php



  namespace App\Controller;

  use App\Repository\HabitatsRepository;


class HabitatsController extends Controller{

    public function route(): void {

      try {
        if (isset($_GET['action'])){

            switch($_GET['action']){

                case 'show':

                    $this->show();
                    
                    break;
                case 'list':
                   
                   
                    break;
                case 'edit':
                    var_dump('chargement de pagescontroller');
                   
                    break;
                    case 'add':
                        var_dump('chargement de pagescontroller');

                    break;
                    case 'update':
                        var_dump('chargement de pagescontroller');
                       
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

                            $id = (int)$_GET['id'];
                            // charger l'id d'un element avec le repository//

                            $habitatRrepository = new HabitatsRepository();
                            $habitat = $habitatRrepository->findOneById($id);

                            $this->render('habitat/show', [

                                'logement' => $habitat
                                         
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
                

}