<?php
require '../vendor/autoload.php';
function route(bool $boolean, callable $callback)
{
    if ($boolean) {
        $callback();
        exit;
    }
}

function currentUrl()
{
    return 'http' . ($_SERVER['HTTPS'] === 'on' ? 's' : '') . '://' . $_SERVER['HTTP_HOST'] . (in_array($_SERVER['SERVER_PORT'], array(80, 443)) ? '' : '');
}
