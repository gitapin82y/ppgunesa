<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.berita.index');
    }
    public function datatable(){
        $data = News::latest('id')->get();

    return Datatables::of($data)
        ->addColumn('action', function ($data) {
            return  '<div class="btn-group">' .
            '<a href="javascript::void(0)" data-id="'.$data->id.'" class="updateItems text-white mx-1 btn btn-info btn-lg">'.
            '<label class="fa fa-edit"></label></a>' .
            '<a href="javascript::void(0)" data-id="'.$data->id.'" class="deleteItems btn btn-danger btn-lg" title="delete">' .
            '<label class="fa fa-trash"></label></a>' .
            '</div>';
        })
        ->addColumn('description',function($data){
			return substr($data->description,0,30);
		})
        ->addColumn('date', function ($data) {
            return Carbon::parse($data->date)->isoFormat('D MMMM Y'); 
        })
        ->rawColumns(['description','created_at','action'])
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
            $data = News::find($request->id);
            $data->title = $request->input('title');
            $data->description = $request->input('description');

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                
                $data->image = '/uploads/'.$imageName;
            }
            $data->save();

        }else{
            $validator = Validator::make($request->all(),[
                'image' => 'image|mimes:jpeg,png,jpg,svg,gif|max:1000|required',
                'title' => 'required',
                'description' => 'required',
            ], [
                'image.required' => 'Foto harus di isi',
                'image.max' => 'Foto tidak boleh lebih dari 1MB',
                'title.required' => 'Judul harus di isi',
                'description.required' => 'Deskripsi harus di isi',
            ]);
    
            if($validator->fails()){
                return response()->json(['errors'=>$validator->errors()]);
            } 
               
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $path_image = '/uploads/'.$imageName;
                News::create([
                    'image' => $path_image,
                    'title' => $request->title,
                    'description' => $request->description,
                    'total_views' => 0,
                    'date' => Carbon::now("Asia/Jakarta"),
                ]);
            }
        }

        return response()->json(['success' => 'Saved Successfully']);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = News::find($id);

        return response()->json(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::where('id',$id)->delete();
        return response()->json(['success' =>'Deleted Successfully']);
    }

    public function detailBerita($title){
        $news = News::orderBy('date', 'desc')->take(4)->get();
        $detail = News::where('title',$title)->first();
        $detail->total_views += 1;
        $detail->save();
        return view('news-detail',compact('news','detail'));
    }


    public function pagination(Request $request){
		return response()->json([
			'total' => News::count(),
			'data' => News::orderBy('date','desc')->get()
		]);
	}

}

