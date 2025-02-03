<?php

class MacAutoController
{
    function serve(Ts $client, $cost = 1000) {
        $name = $client->getDriver()->getName();

        echo 'Здравствуйте, ' . $name . '!' .'<BR>';
        // приняли заказ, проезжайте к кассе
        echo $name . ', мы приняли Ваш заказ, проезжайте к кассе для оплаты'  . '<BR>';
        $client->drive('Касса');

        //оплатите сумму
        if ($client->getDriver()->pay($cost)) {

            echo $name . ', оплата прошла, проежайте к выдаче!'  . '<BR>';
            $client->drive('Выдача');
            echo $name . ', получите заказ!'  . '<BR>';

        } else {

            echo $name . ', недостаточно средств, проедьте на парковку'  . '<BR>';
            $client->drive('Парковка');

        }
    }
}