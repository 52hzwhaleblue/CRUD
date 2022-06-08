<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blog $blog)
    {
        $data = Blog::get();
        return view('admin.blog.index',[
        'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->name = $request->get('name');
        $blog->desc = $request->get('desc');
        $blog->content = $request->get('content');

        if($request->has('image')){
        $file= $request->image;
        $ext = $request->image->extension();//lấy đuôi file png||jpg
        $file_name = Date('Ymd').'-'.'product'.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }
        $blog->photo = $file_name;
        $blog->status = implode(',', $request->get('status'));

        $blog->save();

        return redirect()->route('blog.index');
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
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',[
        'each' => $blog,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Blog $blog)
    {
        // $blog sẽ validate xem có tồn tại id hay chưa, không cần xét điều kiện where
        $fix_status = implode(',', $request->get('status'));

        $file= $request->image;
        $ext = $request->image->extension();//lấy đuôi file png||jpg
        $file_name = Date('Ymd').'-'.'product'.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);

        $blog->photo = $file_name;

        $blog->update(
        [
            'name' => $request->get('name'),
            'desc' => $request->get('desc'),
            'content' => $request->get('content'),
            'photo' => $blog->photo,
            'status'=> $fix_status,
        ],
        $request->except([
            '_token',
            '_method',
            ])
        );
        return redirect()->route("blog.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }
}
