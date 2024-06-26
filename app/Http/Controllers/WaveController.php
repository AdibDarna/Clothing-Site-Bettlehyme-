<?php

namespace App\Http\Controllers;

use App\Models\wave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use App\Http\Requests\StorewaveRequest;
use App\Http\Requests\UpdatewaveRequest;

class WaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $wave = DB::table('waves')->paginate(10);

            return view('adminwave', ['wave' => $wave]);
        } else {
            return redirect('/adminlogin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function makecatalogue($id)
    {
        if (Auth::check()) {
            $catalogue = DB::table('waves')->where('id', $id)->value('katalog');
            $wave = DB::table('waves')->where('id', $id)->value('wave');
            for ($i = 0; $i < $catalogue; $i++) {
                DB::table('produk')->insert([
                    'nama_produk' => null,
                    'stok' => null,
                    'XXL' => null,
                    'XL' => null,
                    'L' => null,
                    'M' => null,
                    'S' => null,
                    'warna' => null,
                    'kategori' => null,
                    'wave' => $wave,
                    'gambar' => null,
                    'gambar_sertif' => null,
                    'deskripsi' => null,
                    'harga' => null,
                    'sertifikat' => null,
                ]);
                DB::table('waves')->where('id', $id)->update([
                    'status' => 'fixed',
                ]);
            }

            return redirect('/admin/produk');
        } else {
            return redirect('/adminlogin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorewaveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'file' => 'required',
                'wave' => 'required',
                'judul' => 'required',
                'katalog' => 'required',
            ]);
            $file = $request->file('file');
            $nama_file = time().$file->getClientOriginalName();
            $tujuan_upload = 'img/foto_header/';
            Image::make($request->file('file'))->resize(null,400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($tujuan_upload . $nama_file);;


            DB::table('waves')->insert([
                'wave' => $request->wave,
                'judul' => $request->judul,
                'katalog' => $request->katalog,
                'header' => $nama_file,
            ]);
            return redirect()->back();
        } else {
            return redirect('/adminlogin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\wave  $wave
     * @return \Illuminate\Http\Response
     */
    public function show(wave $wave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\wave  $wave
     * @return \Illuminate\Http\Response
     */
    public function edit(wave $wave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatewaveRequest  $request
     * @param  \App\Models\wave  $wave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, wave $wave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\wave  $wave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if (Auth::check()) {
            $stock = wave::find($id);
            $stock->delete(); // Easy right?

            return redirect()->back();
        } else {
            return redirect('/adminlogin');
        }
    }
}
