<?php
require_once 'classes/Driverable.php';
require_once 'interfaces/ts.php';
class Auto extends Driverable implements Ts
{

    function drive($destination)
    {
        echo 'Клиент подъехал к месту: ' . $destination . '<BR>';
    }
}