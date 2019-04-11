<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Models\Produk;
use App\Models\Pembelian;
use App\Models\Reward;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend/pages/home');
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
    public function store(Request $req)
    {
        if (!Auth()->check()) {
            return redirect('/login');
        }


        $totHarga = array();
        for ($i=0; $i < count($req->harga); $i++) { 
            $totHarga[$i] = $req->harga[$i] * $req->jumlah[$i];
            // echo $req->jumlah[$i];
        }
        // dd(array_sum($totHarga));

        if (array_sum($totHarga) != 0) {

            $pembelian = new Pembelian;
            $pembelian->user_id = Auth()->user()->id;
            $pembelian->total = array_sum($totHarga);
            // dd($pembelian);
            $pembelian->save();

            if (array_sum($totHarga) >= 150000) {
                $reward = 100;
            }else{
                $reward = 50;
            }

            $Rewards = new Reward;
            $Rewards->user_id = Auth()->user()->id;
            $Rewards->reward = $reward;
            // dd($Rewards);
            $Rewards->save();
            return redirect ('/shop');
        }else{
            $mess = 'Please Input Value';
            return redirect('/shop' )->with(['mess' => $mess]);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function shop()
    {
        $vals = produk::all();
        return view('frontend/pages/shop' , ['vals' => $vals]);
    }



    public function reward()
    {
        $vals = reward::all();
        return view('frontend/pages/reward' , ['vals' => $vals]);
    }
}
