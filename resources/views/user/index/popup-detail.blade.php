@foreach($prod_details as $k => $v)
    <img src='.asset("backend/assets/img/products/$v->photo").' alt="" />
@endforeach