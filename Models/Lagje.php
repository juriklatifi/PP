<?php

class Lagje{
    private $LagjetID;
    private $Qyteti;
    private $Lagjet;
    private $Zona;
    private $Cmimi_hour;
    private $Cmimi_day;
    private $Cmimi_denim;


    function __construct($LagjetID,$Qyteti,$Lagjet,$Zona,$Cmimi_hour,$Cmimi_day,$Cmimi_denim){
            $this->LagjetID = $LagjetID;
            $this->Qyteti = $Qyteti;
            $this->Lagjet = $Lagjet;
            $this->Zona = $Zona;
            $this->Cmimi_hour = $Cmimi_hour;
            $this->Cmimi_day = $Cmimi_day;
            $this->Cmimi_denim = $Cmimi_denim;
    }


    function getLagjetID(){
        return $this->LagjetID;
    }
    function getQyteti(){
        return $this->Qyteti;
    }
    function getLagjet(){
        return $this->Lagjet;
    }
    function getZona(){
        return $this->Zona;
    }
    function getCmimi_hour(){
        return $this->Cmimi_hour;
    }
    function getCmimi_day(){
        return $this->Cmimi_day;
    }
    function getCmimi_denim(){
        return $this->Cmimi_denim;
    }    
}

?>