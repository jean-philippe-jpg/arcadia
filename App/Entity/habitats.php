<?php

namespace App\Entity;




class Habitats extends AbstractClass
{

protected int $id_hab ;
protected  string $description ;
protected string $name ;
protected array $animals_list = [] ;
protected string $race_name ;
protected string $state ;
protected int $avis_id ;
protected string $avis_hab ;
protected string $etat ;



public function getId_hab (): int
{
      return $this->id_hab;
}



public function getName(): string
{     $hab = ucwords($this->name);
      return $hab;
      //return $this->name;
}

public function setName(string $name)
{
     $this->name = $name;
}

public function getDescription(): string
{
      return $this->description;
}

public function setDescription(string $description)
{
     $this->description = $description;
}

public function getAnimalsList(): array
{

      return $this->animals_list = [];
}

public function setAnimalsList( $animals_list)
{
     $this->animals_list = $animals_list;
}



public function getState()
{
return $this->state;
}


public function setState($state)
{
$this->state = $state;

return $this;
}


public function getAvis_id(): int
{
return $this->avis_id;
}


public function setAvis_id($avis_id)
{
$this->avis_id = $avis_id;

return $this;
}


public function getAvis_hab()
{
return $this->avis_hab;
}


public function setAvis_hab($avis_hab)
{
$this->avis_hab = $avis_hab;

return $this;
}

 
public function getEtat()
{
return $this->etat;
}


public function setEtat($etat)
{
$this->etat = $etat;

return $this;
}
}