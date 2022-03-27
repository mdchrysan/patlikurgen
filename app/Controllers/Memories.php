<?php

namespace App\Controllers;

class Memories extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Memories | Patlikurgen'
        ];
        return view('memories', $data);
    }
}
