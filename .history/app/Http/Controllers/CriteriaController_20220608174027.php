<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Criteria;

class CriteriaController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $criteria = Crineria::get();
            return view('admin.criteria.index',[
                'data' => $criteria,
            ]);
    }
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.criteria.create');
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $criteria = new Criteria;
        $criteria->name = $request->get('name');
        $criteria->desc = $request->get('desc');
        $criteria->content = $request->get('content');

        if($request->has('image')){
        $file= $request->image;
        $ext = $request->image->extension();//lấy đuôi file png||jpg
        $file_name = Date('Ymd').'-'.'product'.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }
        $criteria->photo = $file_name;
        $criteria->status = implode(',', $request->get('status'));
        $criteria->save();

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
    public function edit(Criteria $Criteria)
    {
        return view('admin.criteria.edit',[
        'each' => $Criteria,
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
            $News->update(
            [
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
