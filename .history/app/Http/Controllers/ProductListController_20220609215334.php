<?php

namespace App\Http\Controllers;

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
    public function index(ProductList $productList)
    {
         // $data = DB::table('product_lists')
         // ->whereJsonContains('status', 'noibat')
         // ->get();

         // var_dump($data);
         // die();

        $data = ProductList::get();
        return view('admin.product-list.index',[
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
        $countProduct = ProductList::all()->count();
        
        $product_list = new ProductList;
        $product_list->name = $request->get('name');
        $product_list->desc = $request->get('desc');
        $product_list->content = $request->get('content');

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();//lấy đuôi file png||jpg
            $file_name = Date('Ymd').'-'.'product'.$countProduct.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);//chuyển file vào đường dẫn chỉ định
        }
        $news = new News;

        $news->name = $request->get('name');
        $news->desc = $request->get('desc');
        $news->content = $request->get('content');
        $news->photo = $file_name;
        $news->status = implode(',', $request->get('status'));

        $product_list->photo = $file_name;
        $product_list->status = implode(',', $request->get('status'));

        $product_list->save();

        return redirect()->route('product_list.index');
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
    public function update(Request $request,News $productList)
    {
        $fix_status = implode(',', $request->get('status'));

        $countNews = News::all()->count();

        if($request->has('image')){
            $file= $request->image;
            $ext = $request->image->extension();
            $file_name = Date('Ymd').'-'.'news'.$countNews.'.'.$ext;
            $file->move(public_path('backend/assets/img/products'),$file_name);
        }

        $News->update(
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

    public function update(Request $request,ProductList $productList)
    {
        // $productList sẽ validate xem có tồn tại id hay chưa, không cần xét điều kiện where
        $fix_status = implode(',', $request->get('status'));
        $productList->update(
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

        return redirect()->route("product_list.index");
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
        return redirect()->route('product_list.index');
    }
}
