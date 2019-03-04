<?php

    /* BASE CONTROLLER
    * LOADS THE MODELS AND VIEWS
    */
    class Controller {
        //load model
        public function model($model){
            //require model file
            require_once '../app/models/'. $model . '.php';

            //instantite model
            return new $model();
        }

        //load view
        public function view($view, $data = []){
            if(file_exists('../app/views/' . $view . '.php')){
                require_once '../app/views/' . $view . '.php';
            } else {
                //view does not exist
                die('View does not exist');
            }
        }
    }