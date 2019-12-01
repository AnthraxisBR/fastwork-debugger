<?php


if(file_exists(__DIR__ . '/../vendor/autoload.php')){
    include __DIR__ . '/../vendor/autoload.php';
}

use Symfony\Component\VarDumper\Dumper\HtmlDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;

function ddd($variable)
{
    ('cli' === PHP_SAPI ? (new CliDumper()) : new HtmlDumper())->dump((new VarCloner())->cloneVar($variable));
    die(1);
}
