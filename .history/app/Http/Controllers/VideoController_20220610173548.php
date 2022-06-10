<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $video = Video::get();
            return view('admin.video.index',[
                'data' => $video,
            ]);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countVideo = Video::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'video'.$countVideo.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $video = new Video;

        $video->name = $request->get('name');
        $video->desc = $request->get('desc');
        $video->content = $request->get('content');
        $video->photo = $file_name;
        $video->status = implode(',', $request->get('status'));

        $video->save();

        return redirect()->route('video.index');
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
    public function edit(Video $Video)
    {
        return view('admin.video.edit',[
        'each' => $Video,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Video $Video)
    {
        $fix_status = implode(',', $request->get('status'));

        $countVideo = Video::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'video'.$countVideo.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $Video->update(
            [
                'name' => $request->get('name'),
                'desc' => $request->get('desc'),
                'content' => $request->get('content'),
                'photo' => $file_name,
                'status'=> $fix_status,
            ],
            $request->except([
                '_token',
                '_method',
            ])
        );
        return redirect()->route("video.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $Video)
    {
        $Slide->delete();
        return redirect()->route('slide.index');
    }
}
