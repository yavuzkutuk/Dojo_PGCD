<?php
//Il faut $A > $B
$Param1=56952;
$Param2=3444;
try
{
    if(!(is_integer($Param1) OR is_integer($Param2)))
    {
        throw new Exception("Nombre(s) non entiers !",99);
    }else{
        echo "Le PGCD de $Param1 et $Param2 est : ";
        do
        {
            $ParamR=$Param1%$Param2;
            $Param1=$Param2;
            $Param2=$ParamR;
        }
        while($ParamR!=0);
        echo $Param1 ;
    }
}catch(Exception $except) {
    echo $except->getMessage();
}