<?php

namespace App\Http\Controllers;

use App\Models\Accreditation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AccreditationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akreditasi = Accreditation::first();
        return view('admin.akreditasi',compact('akreditasi'));
    }

    public function public()
    {
        $akreditasi = Accreditation::first();
        return view('akreditasi',compact('akreditasi'));
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
     * @param  \App\Models\Accreditation  $accreditation
     * @return \Illuminate\Http\Response
     */
    public function show(Accreditation $accreditation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Accreditation  $accreditation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accreditation $accreditation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Accreditation  $accreditation
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'akreditasi_image' => [
                'required',
            ],
        ]);

        File::cleanDirectory(storage_path('app/public/akreditasi'));

        // Simpan gambar baru
        $imagePath = $request->file('akreditasi_image')->store('akreditasi', 'public');

        $akreditasi = Accreditation::firstOrNew([]); // Sesuaikan dengan kondisi query Anda
        $akreditasi->image = $imagePath;
        $akreditasi->save();
        // Anda dapat menyimpan $imagePath di database jika diperlukan

        return back()->with('success', 'Gambar akreditasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Accreditation  $accreditation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accreditation $accreditation)
    {
        //
    }
}
