<?php

namespace App\Http\Controllers\Api;

class JsonApiController extends ApiController
{

    public function __construct()
    {
        
    }

    public function getList($object_name)
    {
        $filename = resource_path("json/{$object_name}/{$object_name}_list.json");
        if(file_exists($filename)){
            echo file_get_contents($filename);
            exit;
        }else{
            return $this->response->errorNotFound($filename.'不存在');
        }
    }
    
    public function getDetail($object_name, $id)
    {
        $filename = resource_path("json/{$object_name}/{$object_name}_detail.json");
        if(file_exists($filename)){
            echo file_get_contents($filename);
            exit;
        }else{
            return $this->response->errorNotFound($filename.'不存在');
        }
    }
    
}
