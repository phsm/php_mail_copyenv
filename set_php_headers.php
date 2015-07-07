<?php
$url = "{$_SERVER['REQUEST_METHOD']} ";
if (!empty($_SERVER['HTTPS'])) {
        $url .= 'https://';
} else {
        $url .= 'http://';
}
$url .= "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
putenv("_QUERY_STRING={$url}");
putenv("_REMOTE_ADDR={$_SERVER['REMOTE_ADDR']}");
?>
