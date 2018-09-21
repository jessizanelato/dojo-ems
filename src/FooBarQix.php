<?php

declare(strict_types=1);

final class FooBarQix {

    public static function compute ($num) : string {

        $return = '';

        if($num % 3 == 0){
            $return = $return . 'Foo';
        }

        if($num % 5 == 0){
            $return = $return . 'Bar';
        }

        if($num % 7 == 0){
            $return = $return . 'Qix';
        }

        $numstr = strval($num);
        $arrNum = str_split($numstr);

        foreach ($arrNum as $value) {
            if($value == 3){
                $return = $return . 'Foo';
            }

            if($value == 5){
                $return = $return . 'Bar';
            }

            if($value == 7){
                $return = $return . 'Qix';
            }

            if($value == 0){
                $return = $return . '*';
            }
        }

        if(empty($return)){ // by Odilon
            $return = strval($num);
        }

        return $return;

    }

}