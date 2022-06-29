<div class="popup-product">
    <div class="wrap-content">
    </div>
    <div class="popup-btn">
        <i class="fa-solid fa-xmark"></i>
    </div>
</div>
<script type="text/javascript">
    $(".modal-quickview").click(function() {
        $(this).parents().find('.popup-product').addClass('show');
            var id = $(this).data("popupid");
            // alert(id);
            
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/popup-product',
                data: {
                    id: id,
                },
                dataType: 'json',
                success: function(data) {
                    $(".popup-product .wrap-content").html(data);
                }
            });
        })

        $(".popup-btn").click(function() {
            $(this).parents().find('.popup-product').removeClass('show');

        });
</script>