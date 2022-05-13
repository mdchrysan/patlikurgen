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

    public function save()
    {
        //dd($this->request->getVar());
        $this->duduModel->save([
            'dari' => $this->request->getVar('dari'),
            'untuk' => $this->request->getVar('untuk'),
            'ucapan' => $this->request->getVar('ucapan')
        ]);
        return redirect()->to('/dudu');
    }
}
