<?php

class Main extends CI_Controller{

    public function index(){
        echo "I'm the main class!";
    }
    public function hello(){
        echo "hello";
    }
    public function say($arg){
        echo "$arg";
    }
    public function say_anything($arg){
        echo strtoupper($arg);
    }

    public function danger(){

    }
}