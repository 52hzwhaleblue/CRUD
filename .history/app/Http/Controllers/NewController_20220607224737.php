<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\News;

class NewController extends Controller
{
    
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $new = News::get();
            return view('admin.news.index',[
                'data' => $new,
            ]);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News;
        $news->name = $request->get('name');
        $news->desc = $request->get('desc');
        $news->content = $request->get('content');

        if($request->has('image')){
        $file= $request->image;
        $ext = $request->image->extension();//lấy đuôi file png||jpg
        $file_name = Date('Ymd').'-'.'product'.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }
        $news->photo = $file_name;
        $news->status = implode(',', $request->get('status'));
        $news->save();

        return redirect()->route('news.index');
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
    public function edit(News $News)
    {
        return view('admin.news.edit',[
        'each' => $ProductCat,
        ]);
    }


}
