<?php


class Users{
    public $nome;
    public $cognome;
    


    public function __construct($_nome,$_cognome){
        $this-> nome = $_nome ;
        $this-> cognome = $_cognome;
        
    }
}

class Registration extends Users{
    private $utente_registrato;

    public function setUtenteRegistrato($_utente_registrato){
        $this->utenteRegistrato = $_utente_registrato;
    }
}

$utente_1 = new Registration("mario","rossi");
$utente_1->setUtenteRegistrato(true);
 var_dump($utente_1);
?>