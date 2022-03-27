<?php

namespace App\Controllers;

class Books extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Our Books | Patlikurgen'
        ];
        return view('books', $data);
    }
}
