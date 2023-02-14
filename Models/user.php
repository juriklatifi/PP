<?php

class User{
    private $UserID;
    private $Emri;
    private $Mbiemri;
    private $Email;
    private $Username;
    private $Password;
    private $Roli;


    function __construct($UserID,$Emri,$Mbiemri,$Email,$Username,$Password,$Roli){
            $this->UserID = $UserID;
            $this->Emri = $Emri;
            $this->Mbiemri = $Mbiemri;
            $this->Email = $Email;
            $this->Username = $Username;
            $this->Password = $Password;
            $this->Roli = $Roli;
    }


    function getUserID(){
        return $this->UserID;
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
    function getUsername(){
        return $this->Username;
    }
    function getPassword(){
        return $this->Password;
    }
    function getRoli(){
        return $this->Roli;
    }    
}

?>