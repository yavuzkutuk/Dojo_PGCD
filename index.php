<?php
//Il faut $A > $B
$A=10;
$B=3;
try
{
    if(!(is_integer($A) OR is_integer($b)))
    {
        throw new Exception("Nombre(s) non entiers !",99);
    }else{
        echo "Le PGCD de $A et $B est : ";
        do
        {
            $R=$A%$B;
            $A=$B;
            $B=$R;
        }
        while($R!=0);
        echo $A ;
    }
}catch(Exception $except) {
    echo $except->getMessage();
}