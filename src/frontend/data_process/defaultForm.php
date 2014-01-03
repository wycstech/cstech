<?php
$data = array(
    'formName'=>'Example Form',
    'form' => array(
        array(
            'action'=> 'procss.php',
            'inputs'=> array(
                array(
                    'text'=>'true',
                    'checkbox'=>'',
                    'button'=>'',
                    'attr'=> array(
                        'name'=>'example input',
                        'id'=>'input1',
                        'type'=>'text', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'input text',
                        'value'=>'',
                    ),
                ),
                array(
                    'text'=>'',
                    'checkbox'=>'true',
                    'button'=>'',
                    'attr'=> array(
                        'name'=>'example checkbox',
                        'id'=>'input2',
                        'type'=>'checkbox', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'',
                        'value'=>'value from input2',
                    ),
                ),
                array(
                    'text'=>'',
                    'checkbox'=>'',
                    'button'=>'true',
                    'attr'=> array(
                        'name'=>'example button',
                        'id'=>'input3',
                        'type'=>'submit', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'',
                        'value'=>'submit',
                    ),
                ),
            ),
        ),
/*
        array(
            'action'=> 'procss.php',
            'inputs'=> array(
                array(
                    'text'=>'true',
                    'checkbox'=>'',
                    'button'=>'',
                    'attr'=> array(
                        'name'=>'example input',
                        'id'=>'input1',
                        'type'=>'text', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'input text',
                        'value'=>'',
                    ),
                ),
                array(
                    'text'=>'',
                    'checkbox'=>'true',
                    'button'=>'',
                    'attr'=> array(
                        'name'=>'example checkbox',
                        'id'=>'input2',
                        'type'=>'checkbox', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'',
                        'value'=>'value from input2',
                    ),
                ),
                array(
                    'text'=>'',
                    'checkbox'=>'',
                    'button'=>'true',
                    'attr'=> array(
                        'name'=>'example button',
                        'id'=>'input3',
                        'type'=>'submit', //input type reference: http://www.w3schools.com/tags/att_input_type.asp
                        'placeholder'=>'',
                        'value'=>'submit',
                    ),
                ),
            ),
        ),
*/
    ),
);
?>
