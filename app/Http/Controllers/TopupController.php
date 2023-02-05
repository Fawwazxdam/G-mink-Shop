<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class TopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Produk::all();
        return view('mlbb',compact('data'));
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
        $ids = $request->user . $request->area;
        $diamond = $request->dm;
        $ref = 'COBA-' . date('ymdGis');
        $signat = md5('M230106PPJM7144NO:f8169fc7bb39cbe793e8e105512f7bf98395fb25750cca96fabdb4fdf60a76b4:' . $ref);
        $url = "https://v1.apigames.id/v2/transaksi?ref_id=" . $ref . "&merchant_id=M230106PPJM7144NO&produk=" . $diamond . "&tujuan=" . $ids . "&signature=" . $signat . "&server_id";
        $content = file_get_contents($url);
        $datas = json_decode($content);
        $data = Produk::all();
        // dd($data);
        $hasil = [];
        $masuk = [];

        foreach ($datas as $name) {
            $hasil = $datas->data;

            $masuk = [
                'ref_id' => $datas->data->ref_id,
                'tujuan' => $datas->data->destination,
                'produk_kode' => $datas->data->product_code,
                'keterangan' => $datas->data->message,
                'status' => $datas->data->status,
                'nick_name' => $datas->data->sn,
                'harga' => $datas->data->product_detail->price,
                'nama_produk' => $datas->data->product_detail->name,
            ];
        }
        Transaksi::create($masuk);
        // $transaksi = Transaksi::first();
        $transaksis = Transaksi::all();
        $transaksi = $transaksis->max('id');
        $result = Transaksi::find($transaksi);
        // dd($transaksi);

        return view('mlbb', compact('data','hasil','transaksi','result'));
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

    public function midtrans($id)
    {
        $bayar2 = Transaksi::find($id);
        $amount = $bayar2->harga;
        $orderID = $bayar2->ref_id;


        // Set your Merchant Server Key
        Config::$serverKey = 'SB-Mid-server-hgDPJlRzgQmbl5CkQz91poz7';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = false;
        // Set sanitization on (default)
        Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $orderID,
                'gross_amount' => $amount,
            ),
            "enabled_payment" => [
                'bank_transfer'
            ],
        );

        $snapToken = Snap::getSnapToken($params);
        // dd($params);

        return json_encode($snapToken);
    }
}
