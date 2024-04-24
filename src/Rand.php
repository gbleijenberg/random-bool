<?php

namespace Gbleijenberg\RandomBool;

class Rand
{

    /**
     * @return bool A random bool
     */
    public function getBool() : bool
    {
        $gen = rand(0, 1);

        if ($gen == 1)
        {
            return true;
        }
        else
        {
            return false;
        }


        // Überprüfung des Datentyps bool mit 3 x =; es wird entweder true zurückgegeben wenn $gen
        // 1 ist oder false wenn $gen 0 ist
        return $gen === 1;
    }
}