<?php

namespace App\Controllers;

use App\Models\DuduModel;

class Dudu extends BaseController
{
    protected $duduModel;
    public function __construct()
    {
        $this->duduModel = new DuduModel();
    }

    public function index()
    {
        $dudu = $this->duduModel->findAll();
        dd($dudu);

        $data = [
            'title' => 'DUDU | Patlikurgen',
            // 'dudu' => $dudu
        ];

        return view('dudu', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
        // $this->duduModel->save([
        //     'dari' => $this->request->getVar('dari'),
        //     'untuk' => $this->request->getVar('untuk'),
        //     'ucapan' => $this->request->getVar('ucapan')
        // ]);
        // return redirect()->to('/dudu');
    }
}
