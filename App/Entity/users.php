<?php
namespace App\Entity;
class Users
{
    private int $id;
    private string $email;
    private string $password;
    private string $username;
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

    public function getUsername(): string
    {
        return $this->username;
    }

    public function addRoles(string $roles): void
    {
        $this->roles[] = $roles;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}