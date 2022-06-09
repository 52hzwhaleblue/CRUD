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
        $countNews = News::all()->count();

        if($request->has('image')){
        $file= $request->image;
        $ext = $request->image->extension();
        $file_name = Date('Ymd').'-'.'news'.$countNews.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $news = new News;

        $news->name = $request->get('name');
        $news->desc = $request->get('desc');
        $news->content = $request->get('content');
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
        'each' => $News,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $News)
    {
        $fix_status = implode(',', $request->get('status'));

        $countNews = News::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'news'.$countNews.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $news->update(
        [
        'photo' => $file_name,
        'name' => $request->get('name'),
        'desc' => $request->get('desc'),
        'content' => $request->get('content'),
        'status'=> $fix_status,
        ],
        $request->except([
        '_token',
        '_method',
        ])
        );
        return redirect()->route("news.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $News)
    {
        $News->delete();
        return redirect()->route('news.index');
    }
}
