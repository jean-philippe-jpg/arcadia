<?php

namespace App\Entity;


abstract class AbstractClass
{

protected int $id_animals ;
protected string $name_animals ;
protected string $race ;






public function getName_animals(): string
{
return $this->name_animals;
}


public function setName_animals($name_animals)
{
$this->name_animals = $name_animals;

return $this;
}

 
public function getRace()
{
return $this->race;
}


public function setRace($race)
{
$this->race = $race;

return $this;
}
 
public static function getTest()
{ ?>
<h1>hello</h1>
    
<?php }





public function getId_animals()
{


return $this->id_animals;
}


public function setId_animals($id_animals)
{
$this->id_animals = $id_animals;

return $this;
}



}
?>