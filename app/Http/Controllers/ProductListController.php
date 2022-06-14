<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\Alert;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductList;

class ProductListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,ProductList $productList)
    {
        $data = ProductList::get();
        return view('admin.product-list.index',[
            'data' => $data,
        ]);
    }

    public function locSanPhamTheoStatus($status){

        $data = DB::table('product_lists')
        ->whereJsonContains('status', $status)
        ->get();

        dd($data);
        foreach($data as $item){
            $path = 'backend/assets/img/products/';
        $output = 
        '<tr>
            <td>'.$item->name.'</td>

        </tr>';
        }
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $countProductList = ProductList::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();//lấy đuôi file png||jpg
            $file_name = Date('Ymd').'-'.'productList'.$countProductList.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }

        $ProductList = new ProductList;

        $ProductList->name = $request->get('name');
        $ProductList->desc = $request->get('desc');
        $ProductList->content = $request->get('content');
        $ProductList->photo = $file_name;
        $ProductList->status = implode(',', $request->get('status'));

        $ProductList->save();

        return redirect()->route('product_list.index')->with('message', 'Bạn đã tạo danh mục cấp 1 thành công!');
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
    public function edit(ProductList $productList)
    {
        return view('admin.product-list.edit',[
            'each' => $productList,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,ProductList $productList)
    {
        $fix_status = implode(',', $request->get('status'));

        $countproductList = ProductList::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'productList'.$countproductList.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }else{
            $id = $request->input('id');
    
            $data = DB::table('product_lists')
            ->where('id',$id)
            ->select('photo')
            ->get();
            $file_name = $data[0]->photo;
        }
        $productList->update(
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
        return redirect()->route("product_list.index")->with('message', 'Bạn đã cập nhật danh mục cấp 1 thành công!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductList $productList)
    {
        $productList->delete();
        return redirect()->route('product_list.index')->with('message', 'Bạn đã xóa danh mục cấp 1 thành công!');
    }
}
