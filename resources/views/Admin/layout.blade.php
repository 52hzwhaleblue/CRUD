<?php
session_start();
define('RESOURCES', './resources/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,regular,italic,600,600italic,700,700italic,900,900italic"
        rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/main.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Dopzone JS CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css"
        integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Jquery UI CSS --}}
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <title>@yield('title')</title>
</head>

<body class=" app sidebar-mini rtl">
    @include('admin.partials.header')
    @include('admin.partials.navbar')
    <main class="app-content">
        @yield('content')
    </main>
    <script src="{{ asset('backend/assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins/pace.min.js') }}"></script>
    <script src="{{ asset('backend/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        CKEDITOR.replace('cke_content');
    </script>
    {{-- jquery UI --}}
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

    <script>
        $(function() {
            $( "#datepicker" ).datepicker({
                prevText: "Tháng trước",
                nextText: "Tháng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật"],
                duration: "slow"
            });
        });

        $(function() {
            $( "#datepicker2" ).datepicker({
                prevText: "Tháng trước",
                nextText: "Tháng sau",
                dateFormat: "yy-mm-dd",
                dayNamesMin: ["Thứ 2","Thứ 3","Thứ 4","Thứ 5","Thứ 6","Thứ 7","Chủ nhật"],
                duration: "slow"
            });
        });

        $('#thongke-btn').click(function() {
            var _token = $('input[name="token"]').val();
            var from_date = $('#datepicker').val();
            var to_date = $('#datepicker2').val();

            $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                    });
            $.ajax({
                type: 'POST',
                url: '/admin/thongke-theongay',
                data: {
                    _token: _token,
                    from_date: from_date,
                    to_date: to_date,
                },
                dataType: 'json',
                success: function(data) {
                    chart.setData(data);
                }
                });
        });
    </script>
</body>

</html>