<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $slide = Slide::get();
            return view('admin.slide.index',[
                'data' => $slide,
            ]);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countSlide = Slide::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'slide'.$countSlide.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $slide = new Slide;

        $slide->name = $request->get('name');
        $slide->photo = $file_name;

        $slide->save();

        return redirect()->route('slide.index')->with('message', 'Bạn đã thêm slider thành công!');
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
    public function edit(Slide $Slide)
    {
        return view('admin.slide.edit',[
        'each' => $Slide,
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Slide $Slide)
    {
        $countSlide = Slide::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'slide'.$countSlide.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $Slide->update(
            [
                'name' => $request->get('name'),
                'photo' => $file_name,
            ],
            $request->except([
                '_token',
                '_method',
            ])
        );
        return redirect()->route("slide.index")->with('message', 'Bạn đã cập nhật slider thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $Slide)
    {
        $Slide->delete();
        return redirect()->route('slide.index')->with('message', 'Bạn đã xóa slider thành công!');
    }
}
