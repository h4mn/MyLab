<?php
//require_once __DIR__."/vendor/league/CommonMark/src/CommonMarkConverter.php";
require "vendor/league/commonmark/src/CommonMarkConverter.php";


use League\CommonMark\DocParser;
use League\CommonMark\Environment;
use League\CommonMark\HtmlRenderer;

$environment = Environment::createCommonMarkEnvironment();
$parser = new DocParser($environment);
$htmlRenderer = new HtmlRenderer($environment);

$markdown = '# Hello World!';

$document = $parser->parse($markdown);
echo $htmlRenderer->renderBlock($document);

// <h1>Hello World!</h1>