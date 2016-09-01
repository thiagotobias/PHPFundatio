<?php
class Controller extends System{
    protected function view($nomeView, $vars = NULL) {
        if( is_array($vars) && count($vars) > 0 ){
            extract($vars, EXTR_PREFIX_ALL, 'view');
        }
        
        $file = VIEWS .$nomeView. '.phtml';
        
        if( !file_exists($file)){
            die("Houve um erro. View não existe.");
        }
        
        require_once($file);
    }
    
    public function init(){}
}