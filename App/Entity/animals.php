<?php

namespace App\Entity;
class Animals extends AbstractClass
{


protected string $animal ;
protected string $name ;
protected string $state ;
protected string $nourriture;
protected float $quantitee;
protected string $detail ;
protected string $date;
protected string $date_de_passage;
protected string $images;




public function getHabitat() : string
{
return $this->name;
}

public function setHabitat($habitat)
{
$this->name = $habitat;

return $this;
}


public function getState() : string
{
return $this->state;
}

public function setState($state)
{
$this->state = $state;

return $this;
}


public function getNourriture(): string
{
return $this->nourriture;
}


public function setNourriture(string $nourriture)
{
$this->nourriture = $nourriture;

return $this;
}


public function getQuantitee()
{
return $this->quantitee;
}


public function setQuantitee($quantitee)
{
$this->quantitee = $quantitee;

return $this;
}

 
public function getDate_heure(): string
{
return $this->date;
}


public function setDate_heure($date)
{
$this->date = $date;

return $this;
}


public function getDate_de_passage()
{
return $this->date_de_passage;
}


public function setDate_de_passage($date_de_passage)
{
$this->date_de_passage = $date_de_passage;

return $this;
}


public function getDetail(): string
{
return $this->detail;
}


public function setDetail($detail)
{
$this->detail = $detail;

return $this;
}


public function getAnimal()
{
return $this->animal;
}


public function setAnimal($animal)
{
$this->animal = $animal;

return $this;
}

public function getImg()
{
return $this->images;
}


public function setImg($images)
{
$this->images = $images;

return $this;
}
}