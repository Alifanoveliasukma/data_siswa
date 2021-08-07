<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = Siswa::where('nama_depan', 'LIKE', '%' .$request->cari. '%')->get();
        }else {
            $data_siswa = Siswa::all();
        }
        return view('siswa.index', compact(['data_siswa']));
    }

    public function create(Request $request)
    {
    	$data_siswa = Siswa::create($request->all());
    	return redirect('/siswa')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id)
    {
    	$data_siswa = Siswa::find($id);
    	return view('siswa.edit',['data' => $data_siswa]);
    }

    public function update(Request $request, $id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->update($request->all());
        return redirect('/siswa')->with('sukses','Data berhasil di Update');
    }

    public function delete($id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->delete($data_siswa);
        return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
    }
}
