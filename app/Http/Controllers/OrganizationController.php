<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akreditasi = Organization::first();
        return view('admin.struktur-organisasi',compact('akreditasi'));
    }

    public function public()
    {
        $akreditasi = Organization::first();
        return view('struktur-pengelola',compact('akreditasi'));
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
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function show(Organization $organization)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function edit(Organization $organization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $request->validate([
            'akreditasi_image' => [
                'required',
            ],
        ]);

        File::cleanDirectory(storage_path('app/public/strutur-organisasi'));

        // Simpan gambar baru
        $imagePath = $request->file('akreditasi_image')->store('strutur-organisasi', 'public');

        $akreditasi = Organization::firstOrNew([]); // Sesuaikan dengan kondisi query Anda
        $akreditasi->image = $imagePath;
        $akreditasi->save();
        // Anda dapat menyimpan $imagePath di database jika diperlukan

        return back()->with('success', 'Gambar struktur organiasi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Organization  $organization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organization $organization)
    {
        //
    }
}
