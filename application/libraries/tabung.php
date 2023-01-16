<?php

class tabung{
    function input($r, $t){
        $phi=3.14;
        $vol=$phi*$r*$r*$t;
        $luas = 2*$phi*$r*($r+$t);
        $ls=2*$phi*$r*$t;
        
        echo "Phi : ",$phi,"<br>";
        echo "Jari-jari : ",$r, "<br>";
        echo "Tinggi : ", $t, "<br>";
        echo "Volume Tabung adalah : ", $vol;
        echo "<hr>";
        echo "Luas Permukaan Tabung adalah : ", $luas;
        echo "<hr>";
        echo "Luas Selimut Tabung adalah : ", $ls;
    }
}