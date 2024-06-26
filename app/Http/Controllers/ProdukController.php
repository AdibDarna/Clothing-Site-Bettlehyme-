<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Foto;
use App\Models\Produk;
use App\Models\Sertifikat;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Symfony\Component\CssSelector\Parser\Handler\CommentHandler;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $produk = DB::table('produk')->paginate(5);
            $foto = DB::table('fotoproduk')->get();

            return view('adminproduk', ['produk' => $produk, 'foto' => $foto]);
        } else {
            return redirect('/adminlogin');
        }
    }

    public function catalogue()
    {

        $produk = DB::table('produk')->get();

        return view('collection', ['produk' => $produk]);
    }

    public function catalogueDetail($id)
    {
        $catalog = DB::table('produk')->where('wave', $id)->get();
        $fotoCatalog = DB::table('fotoproduk')->where('thumbnail','true')->get();
        return view('collectionDetail', ['catalog' => $catalog, 'fotoCatalog' => $fotoCatalog]);
    }

    public function itemDetail($id)
    {
        $catalog = DB::table('produk')->where('id_produk', $id)->get();
        $sertif = DB::table('sertifikat')->where('id_product', $id)->get();
        $fotoproduk = DB::table('fotoproduk')->where('id_produk', $id)->get();

        return view('catalogueDetail', ['catalog' => $catalog, 'item' => $sertif, 'foto' => $fotoproduk]);
    }

    public function dashboard()
    {

        if (Auth::check()) {
            $totalproduk = DB::table('produk')->count();
            $totalsold = DB::table('sertifikat')->where('owner', 'IS NOT NULL')->count();
            $produk = DB::table('produk')->get();
            $sertifikat = DB::table('sertifikat')->get();
            $comments = Comments::orderBy('created_at', 'desc')->get();

            return view('admindashboard', ['produk' => $produk, 'sertifikat' => $sertifikat, 'totalproduk' => $totalproduk, 'totalsold' => $totalsold, 'comments' => $comments]);
        } else {
            return redirect('/adminlogin');
        }
    }

    public function thumbnail(Request $request)
    {
        $foto = DB::table('fotoproduk')->where('id_produk', $request->id_produk)->get();
        foreach ($foto as $f) {
            DB::table('fotoproduk')->where('id', $f->id)->update([
                'thumbnail' => "false",
            ]);
        }

        DB::table('fotoproduk')->where('id', $request->thumbnail)->update([
            'thumbnail' => "true",
        ]);
        return redirect()->back();
    }

    public function inputComment(Request $request)
    {
        Comments::create([
            'email' => $request->email,
            'comments' => $request->comment
        ]);
        return view('thanks');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if (Auth::check()) {
            $this->validate($request, [
                'id_produk' => 'required',
                'file' => 'required',
                'file*' => 'required',
                'gambar' => 'required',
                'gambarser' => 'required',
                'nama_produk' => 'required',
                'stok' => 'required',
                'XXL' => 'required',
                'XL' => 'required',
                'L' => 'required',
                'M' => 'required',
                'S' => 'required',
                'kategori' => 'required',
                'desc' => 'required',
                'harga' => 'required',
                'warna' => 'required',
            ]);

            if ($request->hasfile('file')) {
                $files = [];
                foreach ($request->file('file') as $file) {
                    if ($file->isValid()) {
                        $filename = time() . $file->getClientOriginalName();
                        $tujuan_upload = 'img/foto_produk/';
                        Image::make($file)->resize(null, 400, function ($constraint) {
                            $constraint->aspectRatio();
                        })->save($tujuan_upload . $filename);

                        $files[] = [
                            'id_produk' => $request->id_produk,
                            'photo_name' => $filename,
                            'thumbnail' => "false",
                        ];
                    }
                }
                Foto::insert($files);
                echo 'Success';
            } else {
                echo 'Gagal';
            }

            $gambar = $request->file('gambar');
            $nama_gambar = time() . $gambar->getClientOriginalName();
            $tujuan_upload_gambar = 'img/foto_produk_animasi';
            $gambar->move($tujuan_upload_gambar, $nama_gambar);

            $file2 = $request->file('gambarser');
            $nama_file2 = time() . $file2->getClientOriginalName();
            $tujuan_upload2 = 'img/foto_sertif/';
            Image::make($request->file('gambarser'))->resize(null, 400, function ($constraint) {
                $constraint->aspectRatio();
            })->save($tujuan_upload2 . $nama_file2);

            $sertif = 'No Certificate';

            DB::table('produk')->where('id_produk', $request->id_produk)->update([
                'nama_produk' => $request->nama_produk,
                'stok' => $request->stok,
                'XXL' => $request->XXL,
                'XL' => $request->XL,
                'L' => $request->L,
                'M' => $request->M,
                'S' => $request->S,
                'kategori' => $request->kategori,
                'warna' => $request->warna,
                'gambar' => $nama_gambar,
                'gambar_sertif' => $nama_file2,
                'deskripsi' => $request->desc,
                'harga' => $request->harga,
                'sertifikat' => $sertif,
            ]);
            return redirect()->back();
        } else {
            return redirect('/adminlogin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        //
    }
}
