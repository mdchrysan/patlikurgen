<?php

namespace App\Controllers;

class Dudu extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'DUDU | Patlikurgen'
        ];
        return view('dudu', $data);
    }
}
