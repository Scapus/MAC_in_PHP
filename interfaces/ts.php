<?php

interface Ts {

    function getDriver() : Driver;

    function drive($destination);
}