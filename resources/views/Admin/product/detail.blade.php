<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.0/dropzone.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css"
        integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <form  enctype="multipart/form-data" class="dropzone" action="{{ route('product.uploadImages') }} ">

        <script type="text/javascript">
            var CSRF_TOKEN = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

            Dropzone.autoDiscover = false;
            var myDropzone = new Dropzone(".dropzone", {
                maxFilesize: 2,
                acceptedFiles: ".jpeg,.jpg,.png"
            });

            myDropzone.on("sending", function(file, xhr, formData) {
                formData.append("_token", CSRF_TOKEN);
            });

            myDropzone.on("success", function(file, response) {
                if(response.success == 0 ){
                    alert(response.error);
                }
            });
        </script>
    </form>
</body>

</html>
