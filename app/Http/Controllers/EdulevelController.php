<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EdulevelController extends Controller
{
    public function data()
    {
    	 $edulevels = DB::table('edulevels')->get();

    	// dd($edulevels);
    	// return $edulevels;
    	// untuk tampil data
    	// return view ('edulevel/data', ['edulevels'=> $edulevels]);
    	// cara melempar data menggunakan compact
    	return view ('edulevel/data', compact('edulevels'));
    	// melempar data dengan with
    	 // return view ('edulevel/data')->with('edulevels',$edulevels);

    } 

    public function add()
    {
        return view('edulevel/add');
    }

    public function addProses(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min : 2',
            'desc' => 'required',
        ],[
            'nama.required' => 'Tidak Boleh Kosong!!!'
        ]);

        DB::table('edulevels')->insert([
            'nama' => $request->nama,
            'desc' => $request->desc
        ]);
       return redirect('edulevels')->with('status', 'Data berhasil di tambahkan!');
    }
    public function edit($id)
    {
        $edulevel= DB::table('edulevels')->where('id',$id)->first();
        return view('edulevel/edit', compact('edulevel'));
    }
    public function editProses(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|min : 2',
            'desc' => 'required',
        ]);

        DB::table('edulevels')->where('id', $id)
        ->update([
                     'nama' => $request->nama,
                     'desc' => $request->desc
        ]);
         return redirect('edulevels')->with('status', 'Data berhasil di update!');
    }

    public function delete($id)
    {
       DB::table('edulevels')->where('id', $id)->delete();
       return redirect('edulevels')->with('status', 'Data berhasil di hapus!');
    }

}
