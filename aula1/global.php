<?php

require_once 'classes/config.php';
spl_autoload_register('load');

function load($nomeclasse)
{
    if (file_exists('classes/' . $nomeclasse . '.php')) {
        require_once ('classes/' . $nomeclasse . '.php');
    }
}