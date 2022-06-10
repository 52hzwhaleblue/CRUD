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
        $slide->desc = $request->get('desc');
        $slide->content = $request->get('content');
        $slide->photo = $file_name;
        $slide->status = implode(',', $request->get('status'));

        $slide->save();

        return redirect()->route('slide.index');
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
    public function update(Request $request,Criteria $Criteria)
    {
        $fix_status = implode(',', $request->get('status'));

        $countCriteria = Criteria::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'criteria'.$countCriteria.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $Criteria->update(
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
        return redirect()->route("criteria.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Criteria $Criteria)
    {
        $Criteria->delete();
        return redirect()->route('criteria.index');
    }
}
