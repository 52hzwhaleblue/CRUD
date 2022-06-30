<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\ProductList;
use App\Models\Products;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = Products::get();
        $splist = DB::table('product_lists')
        ->whereJsonContains('status', 'noibat')
        ->get();

        $splistnb = DB::table('products')
        ->join('product_lists', 'product_lists.id', '=', 'products.id_list')
        ->select('products.*')
        ->get();

        // $prod_details = DB::table('product_details')
        // ->where('id_prod', $id)
        // ->get();
        
        return view('user.index.index',[
            'splist' => $splist,
            'sanpham' => $sanpham,
            'splistnb' => $splistnb,
        ]);
    }

    public function laySanPhamNoiBat(Request $request)
    {
        if($request->get('"noibat,hienthi"')){
            $prodnb = DB::table('products')
            ->all();
        }
        else{
            $prodnb = DB::table('products')
            ->whereJsonContains('status', $request->get('type'))
            ->get();
        }

        $output = '';
        foreach ($prodnb as $k =>$v){
            
            $output .='
            <div class="product-item">
                    <div class="product-img scale-img">
                        <a href='. route('user.product_detail', $v->id) .'>
                            <img src='.asset("backend/assets/img/products/$v->photo").'
                                alt="" />
                        </a>

                        <div class="product-modal">
                            <div class="modal-cart">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <div class="modal-quickview" data-popupid="'.$v->id.'">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                            <div class="modal-wishlist">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </div>
                    </div>
                    <h3 class="name-product"><a href=""> '.$v->name.' </a></h3>
                    <div class="product-price">
                        <span class="price-sale">'.number_format($v->regular_price, 2).' <sup>đ</sup></span>
                        <span class="price-current">'.$v->sale_price.' <sup>đ</sup></span>
                    </div>
                </div>    
            ';
        }
        
        // return response()->json(array('prodnb'=> $prodnb), 200);
        return response()->json($output);

    }

    public function popup_product(Request $request)
    {
        $prods = DB::table('products')
        ->where('id', $request->id)
        ->get();

        $prod_details = DB::table('product_details')
        ->where('id', $request->id)
        ->get();

        $output = '';
        foreach ($prods as $k =>$v){
        $output .='
        <div class="col-lg-6">
            <div class="fotorama" data-nav="thumbs" data-thumbwidth="98" data-thumbheight="98">
                <img src='.asset("backend/assets/img/products/$v->photo").' alt="" width="365"
                    height="365" />
            </div>
        </div>

        <div class="col-lg-6">
        <div class="product-detail-right">
            <div class="row justify-content-between">
                <h3 class="name-product"><a href="">'.$v->name.'</a></h3>
                </h3>

                <div class="wishlist-btn">
                    <div class="icon">
                        <div class="tooltip">Add to wishlist</div>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20">
                                <path
                                    d="M10 16.792 9.125 15.979Q6.062 13.021 4.073 10.958Q2.083 8.896 2.083 6.646Q2.083 4.917 3.292 3.719Q4.5 2.521 6.25 2.521Q7.25 2.521 8.219 3.01Q9.188 3.5 10 4.562Q10.792 3.5 11.76 3.01Q12.729 2.521 13.729 2.521Q15.479 2.521 16.698 3.719Q17.917 4.917 17.917 6.646Q17.917 8.896 15.917 10.958Q13.917 13.021 10.854 15.979ZM10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417Q10 9.417 10 9.417ZM10 15.125Q12.979 12.438 14.844 10.469Q16.708 8.5 16.708 6.646Q16.708 5.354 15.865 4.542Q15.021 3.729 13.729 3.729Q12.771 3.729 11.948 4.292Q11.125 4.854 10.604 5.875H9.417Q8.896 4.854 8.052 4.292Q7.208 3.729 6.25 3.729Q4.958 3.729 4.125 4.542Q3.292 5.354 3.292 6.646Q3.292 8.5 5.146 10.469Q7 12.438 10 15.125Z">
                                </path>
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
            <div class="product-price">
                <span class="price-sale">'.$v->sale_price.' <sup>đ</sup></span>
                <span class="price-current">'.$v->regular_price.'<sup>đ</sup></span>
            </div>
            <p class="product-desc">'.$v->desc.'</p>
            <p class="sltk" data-sltk="'.$v->stock.'">Sản phẩm còn lại: '.$v->stock.'</p>
            '
            ;
        }

        return response()->json($output);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
