<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
            $criteria = Criteria::get();
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
        $countCriteria = Criteria::all()->count();

        if($request->has('image')){
        $file= $request->image;
        $ext = $request->image->extension();//lấy đuôi file png||jpg
        $file_name = Date('Ymd').'-'.'Criteria'.$countCriteria.'.'.$ext;
        $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }

        $Criteria = new Criteria;

        $Criteria->name = $request->get('name');
        $Criteria->desc = $request->get('desc');
       /*  $Criteria->content = $request->get('content'); */
        $Criteria->photo = $file_name;
       /*  $Criteria->status = implode(',', $request->get('status')); */

        $Criteria->save();

        return redirect()->route('criteria.index')->with('message', 'Bạn đã thêm tiêu chí thành công!');
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
    public function update(Request $request,Criteria $Criteria)
    {
        $fix_status = implode(',', $request->get('status'));

        $countCriteria = Criteria::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'Criteria'.$countCriteria.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }else{
            $id = $request->input('id');

            $data = DB::table('criterias')
            ->where('id',$id)
            ->select('photo')
            ->get();

            $file_name = $data[0]->photo;
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
        return redirect()->route("criteria.index")->with('message', 'Bạn đã cập nhât tiêu chí thành công!');
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
        return redirect()->route('criteria.index')->with('message', 'Bạn đã xóa tiêu chí thành công!');
    }
}
