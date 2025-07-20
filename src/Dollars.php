<?php

class Dollars {
public function dollarAmount($amount, $DollarType){
    if($amount > 0 && in_array($DollarType, ["5 dollar", "10 dollar"])){
        return true;

    } else {
        return false; 
    }
}
}