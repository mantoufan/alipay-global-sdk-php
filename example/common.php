<?php
require '../vendor/autoload.php';
require 'data/token.php';
function routeMap(bool $boolean, callable $callback)
{
    if ($boolean) {
        $callback();
        exit;
    }
}

function getCurrentUrl()
{
    if ($opt && isset($opt['webman']) && isset($opt['webman']['request'])) {
        $request = $opt['webman']['request'];
        return 'http' . ($request->getLocalPort() === 443 ? 's' : '') . ':' . $request->fullUrl();
    }
    return 'http' . ($_SERVER['HTTPS'] === 'on' ? 's' : '') .
        '://' . $_SERVER['HTTP_HOST'] .
        (in_array($_SERVER['SERVER_PORT'], array(80, 443, '')) ? '' : ':' . $_SERVER['SERVER_PORT']) .
        $_SERVER['PHP_SELF'] . ($_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '');
}

function getPosts()
{
    return $_SERVER['CONTENT_TYPE'] === 'application/json' ? json_decode(file_get_contents('php://input'), true) : $_POST;
}

function setQueryParams($str, $params)
{
    $urlParams = parse_url($str);
    parse_str($urlParams['query'], $queryParams);
    foreach ($params as $key => $value) {
        $queryParams[$key] = $value;
    }
    return $urlParams['scheme'] . '://' . $urlParams['host'] .
        (empty($urlParams['port']) ? '' : ':' . $urlParams['port']) . $urlParams['path'] .
        (empty($queryParams) ? '' : '?' . http_build_query($queryParams));
}
