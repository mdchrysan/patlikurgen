<?php

namespace App\Controllers;

class Game extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Game | Patlikurgen'
        ];
        return view('game', $data);
    }
}
