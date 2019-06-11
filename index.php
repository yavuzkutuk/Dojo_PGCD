<?php
/**
 * METHODE AVEC RECURSIVITE
 */

function gcd($entier1,$entier2) {
    return ($entier1 % $entier2) ? gcd($entier2,$entier1 % $entier2) : $entier2;
}

//Il faut $Param1 > $Param2
//$Param1=56952;
//$Param2=3444;
$Param1=15;
$Param2=2;
try
{
    if(!(is_integer($Param1) OR is_integer($Param2)))
    {
        throw new Exception("Nombre(s) non entiers !",99);
    }else{
        /**
         * METHODE 1
         */
        echo "Le PGCD de $Param1 et $Param2 est : ";
        do
        {
            $ParamR=$Param1%$Param2;
            $Param1=$Param2;
            $Param2=$ParamR;
        }
        while($ParamR!=0);
        echo $Param1 ;

        /**
         * METHODE 2 AVEC RECURSIVITE
         */

        //echo "Le PGCD de $Param1 et $Param2 est : ".gcd($Param1, $Param2);
    }
}catch(Exception $except) {
    echo $except->getMessage();
}

