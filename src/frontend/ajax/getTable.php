<?php
include_once ('../../../vendor/autoload.php');
include_once ('../../lib/pageAssembler.php');
define('SUCESS', 'staatus');
define('FAILURE', 'failure');

$partialTemplate = $_GET['partialTemplate'];
$partialData = $_GET['partialData'];

$templates = array(
    'partials' => array (
        array(
            'template' => $partialTemplate,
            'data'=> $partialData,
        ),
    ),
);
$assembler = new pageAssembler($templates);

?>
