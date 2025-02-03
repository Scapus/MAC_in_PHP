<?php
require_once 'classes/Driverable.php';
require_once 'interfaces/ts.php';
class Moto extends Driverable implements Ts
{

    function drive($destination)
    {
        echo 'Быстро и громко подкатить к месту: ' . $destination  . '<BR>';
    }
}