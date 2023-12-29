<?php

namespace App\Http\Controllers;

use App\Models\PpgPrajabatan;
use Illuminate\Http\Request;

class PpgPrajabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content = PpgPrajabatan::first();
        return view('admin.ppg-prajabatan', compact('content'));
    }

    public function public()
    {
        $content = PpgPrajabatan::first();
        return view('ppg-prajabatan', compact('content'));
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
     * @param  \App\Models\PpgPrajabatan  $PpgPrajabatan
     * @return \Illuminate\Http\Response
     */
    public function show(PpgPrajabatan $PpgPrajabatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PpgPrajabatan  $PpgPrajabatan
     * @return \Illuminate\Http\Response
     */
    public function edit(PpgPrajabatan $PpgPrajabatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PpgPrajabatan  $PpgPrajabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $content = PpgPrajabatan::first(); // Mengambil satu baris pertama dari tabel
        if($content){
            $content->update(['information' => $request->input('information')]);
            return back()->with('success', 'Informasi PPG Prajabatan Berhasil Diubah.');
        }else{
            PpgPrajabatan::create(['information' => $request->input('information')]);
            return back()->with('success', 'Informasi PPG Prajabatan Berhasil Ditambahkan.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PpgPrajabatan  $PpgPrajabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(PpgPrajabatan $PpgPrajabatan)
    {
        //
    }
}
