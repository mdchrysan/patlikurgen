<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Patlikurgen'
        ];
        return view('home', $data);
    }
}
