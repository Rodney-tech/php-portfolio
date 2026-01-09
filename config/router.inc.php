<?php

/*
 * Author: Rodney Nyelisani Kubayi
 * Description: My personal webside
 */

declare(strict_types=1);

class Router{
    
    private $route_path;
    private $path;
    
    public function __construct(string $route_path) {
        $this->route_path = $route_path;
        $this->path = '';
    }
    
    private function requestURI(){
        $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $clean_request = basename($url);
        
        if($clean_request === 'index.php' || $clean_request === 'public'){
            $clean_request = '';
        }
        
        $forbidden = ['db.inc.php','config.php','router.inc.php','.htaccess','.gitignore','env','app','routes'];
        
        if(in_array($clean_request, $forbidden)){
            $clean_request = '404';
        }
        
        $this->path = $clean_request;
    }
    
    private function requestRoute(){
        
        switch($this->path){
            case '':
            case 'home':
                require_once $this->route_path . 'home.route.php';
                break;
            case 'resume':
                require_once $this->route_path . 'resume.route.php';
                break;
            case 'story':
                require_once $this->route_path . 'story.route.php';
                break;
            case 'message':
                require_once $this->route_path . 'message.route.php';
                break;
            default:
                require_once $this->route_path . '404.route.php';
                break;
        }
    }
    
    public function getURI(){
        $this->requestURI();
    }
    
    public function getRoute(){
        $this->getRoute(); 
    }
}