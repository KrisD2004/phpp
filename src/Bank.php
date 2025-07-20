<?php

class Bank{
    public function processAtm($cardtype, $amountDrawn){

        if($amountDrawn > 0 && in_array($cardtype,["visa", "cashapp", "master"])){

            return true;
            
        } else {
            return false;
        }
    }
}