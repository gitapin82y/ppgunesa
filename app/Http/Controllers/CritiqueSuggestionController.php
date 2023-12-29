<?php

namespace App\Http\Controllers;

use App\Models\CritiqueSuggestion;
use Illuminate\Http\Request;
use Alert;

class CritiqueSuggestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabels = CritiqueSuggestion::all();
        // Jika bukan permintaan AJAX, tampilkan tampilan utama
        return view('admin.kritik-saran', compact('tabels'));
    }
    public function public()
    {
        return view('kontak');
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
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        CritiqueSuggestion::create($request->all());
        Alert::success('Berhasil Dikirim!', 'Terimakasih telah memberikan kami kritik dan saran');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CritiqueSuggestion  $critiqueSuggestion
     * @return \Illuminate\Http\Response
     */
    public function show(CritiqueSuggestion $critiqueSuggestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CritiqueSuggestion  $critiqueSuggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(CritiqueSuggestion $critiqueSuggestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CritiqueSuggestion  $critiqueSuggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = CritiqueSuggestion::findOrFail($id);

        // Update status
        $data->status = $request->status;
        $data->save();

        return response()->json(['status',$request->status]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CritiqueSuggestion  $critiqueSuggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = CritiqueSuggestion::findOrFail($id);
        $post->delete();
    
        return response()->json();
    }
}
