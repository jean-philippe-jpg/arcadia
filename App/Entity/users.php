<?php
namespace App\Entity;
class Users
{
    private int $id;
    private string $email;
    private string $password;
    private string $rolesname;
   // private string $roles;
    
   
    // Tableau de rôles
    private array $roles = [];
    //private string $roles ;

    public function getId(): int
    {
        return $this->id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

   

    public function addRoles(string $role): void
    {
        $this->roles[] = $role;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }

    public function getRolesName(): string
    {
        return $this->rolesname;
    }

    public function setRolesName(string $rolesname): void
    {
         $this->rolesname = $rolesname;
    }
    

    
  
}