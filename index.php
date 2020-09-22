<!--
  GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString
 -->
<?php
  class User {
    public $name;
    public $surname;
    public $date;
    public $email;
    public $password;
    public $city;
    public $address;

    public function __construct($name, $surname, $date, $email, $password) {
      $this -> name = $name;
      $this -> surname = $surname;
      $this -> date = $date;
      $this -> email= $email;
      $this -> password = $password;
    }

    public function __toString() {

      $str = "User:<br>name: " . $this -> name . "<br>"
              . "surname: " . $this -> surname . "<br>"
              . "date: " . $this -> date . "<br>";

      if ($this -> city && $this -> address) {
        $str .= "city: " . $this -> city . "<br>"
                . "address: " . $this -> address . "<br>";
      } elseif ($this -> city) {
        $str .= "city: " . $this -> city . "<br>"
                . "address: " . "-----" . "<br>";
      } elseif ($this -> address) {
        $str .= "city: " . "-----" . "<br>"
                . "address: " . $this -> address . "<br>";
      } else {
        $str .= "city: " . "-----" . "<br>"
                . "address: " . "-----" . "<br>";
      }

      return $str . "email: " . $this -> email . "<br>"
            . "password: " . $this -> password . "<br>";
    }
  }

  $user1 = new User ("Topolino", "Rossi", "15/01/1984", "toporossi@top.com", "TopOroSSi57");
  $user1-> city = "Paperopoli";
  $user1 -> address ="via topolinia, 13";

  $user2 = new User ("Paperino", "Bianchi", "25/11/2000", "paperino_b@pap.com", "2000BiaNki!");

  $user3 = new User ("Minny", "Verdi", "10/07/1988", "verdi88minny@top.com", "v&rdi88MINNY");
  $user3-> city = "Paperopoli";

  $user4 = new User ("Clarabella", "Gialli", "23/09/1995", "Clara_bella@clar.com", "9clArAbEllAgIAllI5");
  $user4 -> address ="via zio paperone, 4";

  echo($user1);
  echo "<br><br>";

  echo($user2);
  echo "<br><br>";

  echo($user3);
  echo "<br><br>";

  echo($user4);
  echo "<br><br>";
