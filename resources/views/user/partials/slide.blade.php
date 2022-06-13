<!-- silder -->
<div class="slider-wrapper">
    <div class="owl-slide owl-carousel owl-theme">
        @foreach ($slides as $k =>$v)
            <img style="height:755px" src="{{ asset('backend/assets/img/products/'.$v->photo) }}" alt="" />
        @endforeach

    </div>


</div>