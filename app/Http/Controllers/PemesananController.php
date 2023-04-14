<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view('pemesanan.index', compact(['pemesanan']));
    }

    public function create()
    {
        return view('pemesanan.create');
    }

    public function store(Request $request)
    {
        Pemesanan::create($request->except(['_token', 'submit']));
        return redirect('/pemesanan');
    }

    public function edit($nomor_antrian)
    {
        $pemesanan = Pemesanan::find($nomor_antrian);
        return  view('pemesanan.edit', compact(['pemesanan']));
    }

    public function update($nomor_antrian, Request $request)
    {
        $pemesanan = Pemesanan::find($nomor_antrian);
        $pemesanan->update($request->except(['_token', 'submit']));
        return redirect('/pemesanan');
    }

    public function destroy($nomor_antrian)
    {
        $pemesanan = Pemesanan::find($nomor_antrian);
        $pemesanan->delete();
        return redirect('/pemesanan');
    }

    public function detail($nomor_antrian)
    {
        $pemesanan = Pemesanan::find($nomor_antrian);
        return view('pemesanan.detail', compact(['pemesanan']));
    }
}
