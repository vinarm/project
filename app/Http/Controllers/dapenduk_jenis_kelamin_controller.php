<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\dapenduk_jenis_kelamin;
use App\Models\User;

class dapenduk_jenis_kelamin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // mengambil data dari table 
    	$dapenduk_jenis_kelamin = DB::table('dapenduk_jenis_kelamins')->get();
 
    	// mengirim data ke view index
    	return view('dapenduk-gender',['dapenduk_jenis_kelamins' => $dapenduk_jenis_kelamin]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-dapenduk-gender');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // insert data ke table 
	    DB::table('dapenduk_jenis_kelamins')->insert([
		    'jenis_kelamin' => $request->jenis_kelamin,
		    'jumlah' => $request->jumlah,
	    ]);

        // $this->validate($request, [
        //     'jenis_kelamin' => 'required',
        //     'jumlah' => 'required'
        // ]);

        // User::create([
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'jumlah' => $request->jumlah,
        // ]);

	    // alihkan halaman ke halaman dapenduk-gender
	    return redirect('/Berdasarkan-Jenis-Kelamin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mengambil data berdasarkan id yang dipilih
	    $dapenduk_jenis_kelamin = DB::table('dapenduk_jenis_kelamins')->where('id',$id)->get();
	    
        // passing data yang didapat ke view edit.blade.php
	    return view('edit-dapenduk-gender',['dapenduk_jenis_kelamins' => $dapenduk_jenis_kelamin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data 
	    DB::table('dapenduk_jenis_kelamins')->where('id',$request->id)->update([
            'jenis_kelamin' => $request->jenis_kelamin,
		    'jumlah' => $request->jumlah,
	    ]);
	    // alihkan halaman
	    return redirect('/Berdasarkan-Jenis-Kelamin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::table('kecamatans')->where('id', $id)->delete();

            return redirect('/kecamatan')->with('toast_success', 'Data telah dihapus');
            //code...
        } catch (\Throwable $th) {
            return $th->getMessage();
            //throw $th; 
        }
    }
}
