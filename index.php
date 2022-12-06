<?php

include_once('vendor/autoload.php');

use TijsVerkoyen\CssToInlineStyles\CssToInlineStyles;

$cssToInlineStyles = new CssToInlineStyles();

$html = file_get_contents(__DIR__ . '/test/test.html');
$css = file_get_contents(__DIR__ . '/test/test.css');

echo $cssToInlineStyles->convert(
    $html,
    $css
);