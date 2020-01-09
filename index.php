<?php
  class Persona {
    public $nome;
    public $cognome;

    function __construct($nome , $cognome){
      $this -> nome = $nome;
      $this -> cognome = $cognome;
    }

    function __toString(){
      return  " Nome: " . $this -> nome . "<br>" .
              " Cognome: " . $this -> cognome;
    }
  }

  class Ospite extends Persona{
    public $AdN;

    function __construct($nome , $cognome , $annoDiNascita){
      parent::__construct($nome , $cognome);
      $this -> AdN = $annoDiNascita;
    }

    function __toString(){
      return  parent::__toString() . "<br>" 
              . "Anno di nascita: " . $this -> AdN;
    }
  }

  class Pagante extends Persona{
    public $indirizzo;

    function __construct($nome , $cognome , $indirizzo){
      parent::__construct($nome , $cognome);
      $this -> indirizzo = $indirizzo;
    }

    function __toString(){
      return  parent::__toString() . "<br>" 
              . "Indirizzo di residenza: " . $this -> indirizzo;
    }
  }

  echo "classe persona <br> <br>";
  $persona1 = new Persona("Umberto" , "Rezzonico");
  echo $persona1;

  echo "<br>----<br>";

  echo "classe ospite <br> <br>";
  $ospite1 = new Ospite("Fausto" , "Gervasoni" , "1956");
  echo $ospite1;

  echo "<br>----<br>";

  echo "classe pagante <br> <br>";
  $pagante1 = new Pagante("Heinz" , "Huber" , "Canton Ticino, Svizzera");
  echo $pagante1;