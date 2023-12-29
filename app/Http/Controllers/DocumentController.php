<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.upload-dokumen.index');
    }
    public function public()
    {
        $items = Document::get();
        return view('dokumen-ppg', compact('items'));
    }

    public function datatable(){
        $data = Document::latest('id')->get();

      return Datatables::of($data)
        ->addColumn('action', function ($data) {
            return  '<div class="btn-group">' .
            '<a href="javascript::void(0)" data-id="'.$data->id.'" class="updateItems text-white mx-1 btn btn-info btn-lg">'.
            '<label class="fa fa-edit"></label></a>' .
            '<a href="javascript::void(0)" data-id="'.$data->id.'" class="deleteItems btn btn-danger btn-lg" title="delete">' .
            '<label class="fa fa-trash"></label></a>' .
            '</div>';
        })
        ->addColumn('created_at', function ($row) {
            return Carbon::parse($row->created_at)->format('d F Y'); 
        })
        ->rawColumns(['created_at','action'])
        ->addIndexColumn()
        ->make(true);
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
        if($request->id){
            $data = Document::find($request->id);
            $data->name = $request->input('name');

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('panduan'), $fileName);
                
                $data->file = '/panduan/'.$fileName;
            }
            $data->save();

        }else{
            $validator = Validator::make($request->all(),[
                'file' => 'required',
                'name' => 'required',
            ], [
                'file.required' => 'Dokumen harus di isi',
                'name.required' => 'Judul harus di isi',
            ]);
    
            if($validator->fails()){
                return response()->json(['errors'=>$validator->errors()]);
            } 

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('panduan'), $fileName);
                $path_file = '/panduan/'.$fileName;
                Document::create([
                    'name' => $request->name,
                    'file' => $path_file,
                ]);
            }
        }

        return response()->json(['success' => 'Saved Successfully']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function show(Document $document,$id)
    {
        $data = Document::find($id);
        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function edit(Document $document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy(Document $document,$id)
    {
        Document::where('id',$id)->delete();
        return response()->json(['success' =>'Deleted Successfully']);
    }
}
