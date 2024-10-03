<?php

namespace App\Entity;

class AnimalsState {

    
      protected int $id ;
      protected string $nourriture ;
      protected  int $quantitee ;
      protected string $state;
      protected string $detail;
      protected int $animal;
      protected string $date;
     

public function getId(): int
{
      return $this->id;
}

public function setId(int $id)
{
     $this->id = $id;
}


     
      public function getNourriture():string
      {
            return $this->nourriture;
      }

     
      public function setNourriture($nourriture)
      {
            $this->nourriture = $nourriture;

            return $this;
      }

     
      public function getQuantitee():int
      {
            return $this->quantitee;
      }

     
      public function setQuantitee($quantiteé)
      {
            $this->quantitee = $quantiteé;

            return $this;
      }

     
      public function getState():string
      {
            return $this->state;
      }

     
      public function setState($state)
      {
            $this->state = $state;

            return $this;
      }

     
      public function getDetail():string
      {
            return $this->detail;
      }

      
      public function setDetail($detail)
      {
            $this->detail = $detail;

            return $this;
      }

     
      public function getAnimal():int
      {
            return $this->animal;
      }

     
      public function setAnimal($animal)
      {
            $this->animal = $animal;

            return $this;
      }

     
      public function getDate():string
      {
            return $this->date;
      }

      public function setDate($date)
      {
            $this->date = $date;

            return $this;
      }
}