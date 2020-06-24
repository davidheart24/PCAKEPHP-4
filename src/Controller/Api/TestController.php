<?php

namespace App\Controller\Api;


// use App\Controller\AppController;

class TestController extends ApiController
{
    public function index(){
        $tickets = ['1', '2', '3'];
        $this->set(compact('tickets'));
    }
}
