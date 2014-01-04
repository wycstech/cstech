<?php
include_once ('../../../vendor/autoload.php');
include_once ('../../lib/pageAssembler.php');
define('SUCESS', 'staatus');
define('FAILURE', 'failure');

$mappings = array(
    'default'=> array(
        'template' => 'table',
        'data'=>'defaultTable',
    ),
    'd1-1'=> array(
        'template' => 'form',
        'data'=>'defaultForm',
    ),
    'd1-2'=> array(
        'template' => 'table',
        'data'=>'defaultTable',
    ),
);

$id = array_key_exists($_GET['id'], $mappings) ? $_GET['id'] : 'default';
$partialTemplate = $mappings[$id]['template'];
$partialData = $mappings[$id]['data'];
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
