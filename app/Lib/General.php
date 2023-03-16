<?php

namespace App\Lib;

class General{
    function SplitName($fullname){
        $parts = explode(" ", $fullname);
        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        } else {
            $firstname = $fullname;
            $lastname = " ";
        }

        return array('firstname' => $firstname, 'lastname' => $lastname);
    }
}