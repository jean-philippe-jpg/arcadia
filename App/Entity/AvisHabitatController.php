<?php

namespace App\Entity;




class Avishabitats 
{

protected int $id_avis ;
protected string $avis ;
protected string $etat ;
protected string $name ;


public function getId_avis(): int
{
      return $this->id_avis;
}

public function setId_avis(int $id)
{
     $this->id_avis = $id;
}




public function getAvis()
{
return $this->avis;
}


public function setAvis($avis)
{
$this->avis = $avis;

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


public function getHabitat()
{
return $this->name;
}


public function setHabitat($name)
{
$this->name = $name;

return $this;
}
}