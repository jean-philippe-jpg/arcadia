<?php

namespace App\Entity;




class Horaires
{

protected int $id ;
protected string $date ;
protected string $horaires = 'FERMER' ;
protected string $close = 'FERMER' ;


public function getId(): int
{
      return $this->id;
}

public function setId(int $id)
{
     $this->id = $id;
}


public function getHoraires()
{

return $this->horaires;
}


public function setHoraires($horaires )
{
$this->horaires = $horaires;

return $this;
}

public function getDate()
{    $date = strtoupper($this->date);
    return $date;
}


public function setDate($date)
{
$this->date = $date;

return $this;
}

public function getClose()
{
return $this->close;
}


public function setClose($close)
{
$this->close = $close;

return $this;
}
}