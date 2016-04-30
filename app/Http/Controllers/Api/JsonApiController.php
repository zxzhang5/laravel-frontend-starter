<?php

namespace App\Http\Controllers\Api;

class JsonApiController extends ApiController
{

    public function __construct()
    {
        
    }

    public function index()
    {
        $json = [];
        return $this->response->array($json);
    }
}
