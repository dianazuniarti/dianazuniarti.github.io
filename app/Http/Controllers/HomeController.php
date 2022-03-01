<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMKN 1 Nglegok'
        ];
            
        
        return view('v_home');

    }

    public function about()
    {
        return (view('V_about'));
    }
}
