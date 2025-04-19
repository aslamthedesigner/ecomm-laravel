<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ecomm project</title>
    {{-- bs css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    {{-- j query minifide --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- bdjs --}}
   
</head>

<body>
    <div class="container">
        {{View::make('header')}}
        @yield('content')
        {{View::make('footer')}}
    </div>

</body>
{{-- <script>
    $(document).ready(function(){
        $('button').click(function(){
            alert ('all set');
        })
    })
</script> --}}
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
        align-items: center;
    }
    .custom-product img{
       height: 500px !important;
    }
    .carousel-caption-text{
        background-color: rgba(135, 207, 235, 0.361);
    }
    .trending-item-img{
        margin-top: 50px;
        display: flex;
        justify-content:space-between;
    }
    .trending-item{
        color: rgb(221, 233, 94);
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
</script>
</html>