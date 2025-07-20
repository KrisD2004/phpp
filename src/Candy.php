<?php

class Candy {
    public function CandyPick($amount, $flavor){
        if($amount > 0 && in_array($flavor, ["cherry", "orange"])){
            return true;
        } else{
            return false;
        }
    }
}