<?php

  namespace App\Controller;

use App\Entity\Habitats;
use App\Repository\UsersRepository;
    use App\Repository\CommentsRepository;
use App\Repository\HabitatsRepository;
use App\Repository\ServicesRepository;

class PagesController extends Controller{

    public function route(): void {

      try {
        if (isset($_GET['action'])){

            switch($_GET['action']){

                
                case 'home':
                    $this->home();
                   
                    break;
                case 'register':
                    $this->register();
                    break;
                    case 'roles':
                        $this->roles();
                        break;
                    case 'connect':
                        $this->connected();
                        break;
                        case 'readusers':
                            $this->readUsers();
                            break;
                            case 'collection':
                                $this->readServices();
                                break;
                                case 'readsusers':
                                    $this->readUsers();
                                    break;
                default:
                throw new \Exception('page introuvable :/');
                  break;
        }
        }  else {

            echo 'erreur de controller';
        }
      } catch(\Exception $e){
        echo $e->getMessage();
        $this->render('errors/errors', [
            'errors' => $e->getMessage()
        ]);

      };

                }

               
                protected function home(): void
                
                {
                   
                    $comments = new CommentsRepository();
                    $comments->create();
                    $cmt = $comments->read();
                           
                    $home = new HabitatsRepository();
                    $environement =  $home->readHabitat();

                    $this->render('home', [
                            'avis' => $cmt,
                            'habitat' => $environement
                            
                    ] );
                    //require_once 'templates/showanimals.php';//
                  
                }

               
                protected function register(): void
                
                {
                        $register = new UsersRepository();
                        $register->addRegister();
                  
                    $this->render('Admin/Inscription', [
                            
                    ] );
                    //require_once 'templates/showanimals.php';//
                  
                }

                protected function roles(): void
                
                {    

                    if(isset($_GET['addroles'])) {
                        $id = $_GET['addroles'];

                        $roles = new UsersRepository();
                        $roles->Roles($id);
                   
                     $this->render('Admin/Users', [
          
                     ] );
                     //require_once 'templates/showanimals.php';//
                   
                    }
                      
                    }

            

                protected function connected(): void
                
                {    
                    $connected = new UsersRepository();
                    $connect = $connected->connect();
                       
                    $this->render('Admin/Connexion', [

                        'user' => $connect
                            
                    ] );
                    //require_once 'templates/showanimals.php';//
                  
                }

                protected function readUsers(): void
                
                {    
                    $read = new UsersRepository();
                    $users = $read->read();
                  
                       
                    $this->render('Admin/Users', [

                        'users' => $users,
                        
                            
                    ] );
                    //require_once 'templates/showanimals.php';//
                  
                }

                protected function readServices(): void
                
                {    
                    $read = new ServicesRepository();
                    $read->read();
                       
                    $this->render('services', [

                        
                            
                    ] );
                    //require_once 'templates/showanimals.php';//
                  
                }




}