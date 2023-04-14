<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jenis_kesenian;
use App\Models\sanggar;

class jenis_keseniancontroller extends Controller
{
    //

    public function index()
    {
        $jenis = jenis_kesenian::all();
        return view('jeniskesenian', ['jenisseni' => $jenis, 'title' => 'Jenis-Kesenian']);
    }

    public function jenis()
    {
        return view('jenis-seni-create', ['title' => 'Jenis-Kesenian-Create']);
    }

    public function datasanggar(sanggar $nama_jenis)
    {
        //return $id-> DaftarKarya;
        return view('/Jenis-Kesenian',[
            "data" =>  $nama_jenis,
            "title" => 'Data-Sanggar',
            "daftarkarya" => $nama_jenis-> jenis_kesenian,
        ]
    );
    }

    //
    public function seni()
    {
        $dataa = jenis_kesenian::all();
        return view('jeniskesenian', ['dataseni' => $dataa, 'title' => 'Data-Kesenian']);
    }

    // public function show()
    // {
    //     $jenissenis = jenisseni::all();
    //     return view('jenisseni.show', compact('jenissenis'));
    // }

    public function dataseni(jenis_kesenian $id_KIK, $nama_Sanggar, $status_pemilik, $alamat )
    {
        //return $id-> DaftarKarya;
        return view('/Jenis-Kesenian',[
            "data" =>  $id_KIK, $nama_Sanggar, $status_pemilik, $alamat,
            "title" => 'Data-Kesenian',
            "daftarkarya" => $id_KIK, $nama_Sanggar, $status_pemilik, $alamat-> dataseni,
        ]
    );
    }
}
