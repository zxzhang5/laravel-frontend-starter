<?php

namespace App\Http\Controllers;

class PageController extends Controller
{

    public function welcome()
    {
        return view("welcome");
    }

    public function index($object_name, $action = 'list')
    {
        if ($object_name == 'errors') {
            return view("{$object_name}.{$action}");
        } else {
            if(is_numeric($action)){
                return view("{$object_name}.{$object_name}_detail");
            }
            return view("{$object_name}.{$object_name}_{$action}");
        }
    }

}
