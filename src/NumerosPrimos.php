<?php
declare(strict_types=1);

final class NumerosPrimos {

    public static function gerar ($num){
        $retorno = [];
        
        $divisor = 2;
        
        while($num > 1){
            while ($num % $divisor == 0) {
                $num = $num / $divisor;
                $retorno[] = $divisor;
            }
            $divisor++;
        }
        return $retorno;

    }

}