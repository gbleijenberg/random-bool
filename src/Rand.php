<?php

namespace Gbleijenberg\RandomBool;

class Rand
{

    /**
     * @return bool
     */
    public function getBool() : bool
    {
        $gen = rand(0, 1);

        // ÜBerprüfung des Datentyps bool mit 3 x =; es wird entweder true zurückgegeben wenn $gen
        // 1 ist oder false wenn $gen 0 null ist
        return $gen === 1;
    }
}