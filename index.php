
<?php
include_once ('vendor/autoload.php');
include_once ('src/lib/pageAssembler.php');
$templates = array(
    'partials' => array(
        array(
            'template' => 'head',
            'data' => 'signin_head'
        ),
        array(
            'template' => 'signin',
            'data' => 'signin'
        ),
        array(
            'template' => 'tail',
            'data' => 'signin_tail'
        ),
        
    ),
    'main' => array(
        'template' => 'main',
        'data' => '',
    ),
);
$assembler = new pageAssembler($templates);
?>
