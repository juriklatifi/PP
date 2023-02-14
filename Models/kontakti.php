<?php

class Kontakti{
    private $KontaktiID;
    private $Emri;
    private $Mbiemri;
    private $Email;
    private $Subjekt;
    private $Kerkesa;


    function __construct($KontaktiID,$Emri,$Mbiemri,$Email,$Subjekt,$Kerkesa){
            $this->KontaktiID = $KontaktiID;
            $this->Emri = $Emri;
            $this->Mbiemri = $Mbiemri;
            $this->Email = $Email;
            $this->Subjekt = $Subjekt;
            $this->Kerkesa = $Kerkesa;
    }


    function getKontaktiID(){
        return $this->KontaktiID;
    }
    function getEmri(){
        return $this->Emri;
    }
    function getMbiemri(){
        return $this->Mbiemri;
    }
    function getEmail(){
        return $this->Email;
    }
    function getSubjekt(){
        return $this->Subjekt;
    }
    function getKerkesa(){
        return $this->Kerkesa;
    }   
}

?>