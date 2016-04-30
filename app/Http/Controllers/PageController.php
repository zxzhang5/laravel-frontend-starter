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
        if ($object_name == 'welcome') {
            return view("welcome");
        } else {
            return view("{$object_name}.{$object_name}_{$action}");
        }
    }

}
