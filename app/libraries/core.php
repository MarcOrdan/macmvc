<?php
    /* App Core class
    Creates URL and loads core controller
    URL FORMAT: /controller/method/params 
    */
    
     class Core {
        // change this to Home when frontend for home login is done
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            $this->getUrl();
        } 

        public function getUrl(){
            echo $_GET['url'];
        }
    }
    
