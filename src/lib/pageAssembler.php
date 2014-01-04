<?php
define('INDEX_PATH', '/Library/WebServer/Documents/cstech/');
define('TEMPLATE_PATH', '/Library/WebServer/Documents/cstech/src/frontend/templates/');
define('DATA_PATH', '/Library/WebServer/Documents/cstech/src/frontend/data_process/');
define('STATIC_PATH', '/src/static/');
class pageAssembler {

    private $mustache;
    private $templates;

    private function generateContent($templates) {
        $mustache = new Mustache_Engine(array(
            'loader' => new Mustache_Loader_FilesystemLoader (INDEX_PATH),
            'partials_loader' => new Mustache_Loader_FilesystemLoader (TEMPLATE_PATH),
            'cache' => TEMPLATE_PATH.'compiled'
        ));
        
        foreach ($templates as $type => $temp) {
            if ($type == 'partials') {
                foreach ($temp as $partials) {
                    $tpl = $mustache->loadPartial($partials['template']);
                    include_once(DATA_PATH.$partials['data'].'.php');
                    $html = $tpl->render($data);
                    echo $html; 
                    //error_log($partials['template']);
                    //error_log($html);
                }
            } else {
                $tpl = $mustache->loadTemplate($temp['template']);
                $html = $tpl->render();
                echo $html; 
                //error_log($temp['template']);
                //error_log($html);
            }
        }
    }

    public function __construct($templates = array()) {
        if ($templates) {
            $this->templates = $templates;
        }
        $this->generateContent($this->templates);    
    }
}
?>
