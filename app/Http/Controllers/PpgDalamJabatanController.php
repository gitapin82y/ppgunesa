<?php

namespace App\Http\Controllers;

use App\Models\PpgDalamJabatan;
use Illuminate\Http\Request;

class PpgDalamJabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = PpgDalamJabatan::first();
        return view('admin.ppg-dalam-jabatan', compact('content'));
    }

    public function public()
    {
        $content = PpgDalamJabatan::first();
        return view('ppg-dalam-jabatan', compact('content'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PpgDalamJabatan  $PpgDalamJabatan
     * @return \Illuminate\Http\Response
     */
    public function show(PpgDalamJabatan $PpgDalamJabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PpgDalamJabatan  $PpgDalamJabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(PpgDalamJabatan $PpgDalamJabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PpgDalamJabatan  $PpgDalamJabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $content = PpgDalamJabatan::first(); // Mengambil satu baris pertama dari tabel
        if($content){
            $content->update(['information' => $request->input('information')]);
            return back()->with('success', 'Informasi PPG Dalam Jabatan Berhasil Diubah.');
        }else{
            PpgDalamJabatan::create(['information' => $request->input('information')]);
            return back()->with('success', 'Informasi PPG Dalam Jabatan Berhasil Ditambahkan.');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PpgDalamJabatan  $PpgDalamJabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PpgDalamJabatan $PpgDalamJabatan)
    {
        //
    }
}
