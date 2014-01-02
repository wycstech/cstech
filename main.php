<?php
include_once ('vendor/autoload.php');
include_once ('src/lib/pageAssembler.php');
$templates = array(
    'partials' => array(
        array(
            'template' => 'head',
            'data' => 'main_head'
        ),
        array(
            'template' => 'navbar',
            'data' => 'navbar'
        ),
        array(
            'template' => 'defaultContenet',
            'data' => 'defaultContenet',
        ),
        array(
            'template' => 'tail',
            'data' => 'main_tail'
        ),
        
    ),
    'main' => array(
        'template' => 'main',
        'data' => '',
    ),
);
$assembler = new pageAssembler($templates);
?>
