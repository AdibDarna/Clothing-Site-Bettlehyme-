<?php

namespace App\Http\Controllers;

use App\Models\Sertifikat;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use chillerlan\QRCode\QRCode;



class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if (Auth::check()) {
            $sertifikat = DB::table('sertifikat')
                ->join('produk', 'sertifikat.id_product', '=', 'produk.id_produk')
                ->paginate(10);

            return view('adminsertifikat', ['sertifikat' => $sertifikat]);
        } else {
            return redirect('/adminlogin');
        }
    }

    public function sertifdetail()
    {

        if (Auth::check()) {
            $sertifikat = DB::table('sertifikat')
                ->join('produk', 'sertifikat.id_product', '=', 'produk.id_produk')
                ->paginate(10);

            return view('adminsertifikat', ['sertifikat' => $sertifikat]);
        } else {
            return redirect('/adminlogin');
        }
    }

    public function sertifCheck($id)
    {
        $owner = DB::table('sertifikat')->where('random_id', $id)->value('owner');

        if ($owner == '-') {
            return redirect('/inputSertif/' . $id);
        } else {
            $id_produk = DB::table('sertifikat')->where('random_id', $id)->value('id_product');
            $catalog = DB::table('produk')->where('id_produk', $id_produk)->get();
            $sertif = DB::table('sertifikat')->where('random_id', $id)->get();

            return view('catalogueSertif', ['catalog' => $catalog, 'item' => $sertif]);
        }
    }

    public function inputSertif($id)
    {
        $kode = DB::table('sertifikat')->where('random_id', $id)->first();
        if ($kode == null) {
            return view('misc.404');
        }else{
            $versi = DB::table('sertifikat')->where('random_id', $id)->value('id');
            return view('inputSertif', ['id' => $id, 'versi' => $versi]);
        }
        
    }

    public function storeSertif(Request $request)
    {
        DB::update('update sertifikat set owner = "' . $request->owner . '" where random_id ="' . $request->random_id . '"');

        return redirect('/catalogueSertif/' . $request->random_id);
    }


    public function downloadQR($rand_id)
    {

        $id_sertif = DB::table('sertifikat')->where('random_id', $rand_id)->value('id');


        $data = $_SERVER['HTTP_HOST'] . '/catalogueSertif/' . $rand_id;

        // quick and simple:
        echo '<a href="' . (new QRCode)->render($data) . '" download="' . $id_sertif . '.png">
        <img src="' . (new QRCode)->render($data) . '" alt="QR Code" /> </a>';
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
    public function store(Request $request, $id)
    {
        if (Auth::check()) {
            $prod = DB::select('select * from produk where id_produk =' . $id);
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $length = 30;
            foreach ($prod as $p) {
                for ($i = 1; $i <= $p->stok; $i++) {
                    $randomChar = '';
                    for ($j = 0; $j < $length; $j++) {
                        $randomChar .= $characters[rand(0, $charactersLength - 1)];
                    }

                    DB::table('sertifikat')->insert([
                        'id' => $p->nama_produk . '-' . sprintf("%03s", $i) . '-' . $p->stok,
                        'random_id' => $randomChar,
                        'versi' => $i,
                        'owner' => '-',
                        'id_product' => $p->id_produk,
                    ]);
                }
                DB::update('update produk set sertifikat = "Certificated" where id_produk =' . $p->id_produk);
            }
            return redirect()->action([SertifikatController::class, 'index']);
        } else {
            return redirect('/adminlogin');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
