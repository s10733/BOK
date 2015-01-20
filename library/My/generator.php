<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of generator
 *
 * @author Łukasz
 */
class My_generator {
    
    public static function generuj_haslo(){
    $pattern='1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
    $key="szu";
    for($i=0; $i<5; $i++){
       
        $key.=$pattern{rand(0,strlen($pattern)-1)};
        
    }
    return $key;
}
    //put your code here
}
