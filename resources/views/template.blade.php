<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<title>@yield('tittle')</title>
<link rel="stylesheet" type="text/css" href="{{asset('webproje')}}/css/headerfooter.css" />
<link rel="stylesheet" type="text/css" href="{{asset('webproje')}}/css/style.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</head>
<body>
@include('header')
<div class="main">
@yield('icerik')
</div>
    <div class="temizle"></div>
    @include('footer')
<script type="text/javascript">
    $(function() {
        $("#top").click(function() {
            $("html,body").stop().animate({ scrollTop: "0" }, 1000);
        });
    });
    $(window).scroll(function() {
        var uzunluk = $(document).scrollTop();
        if (uzunluk > 300) $("#top").fadeIn(500);
        else { $("#top").fadeOut(500); }
    });
</script>
    
</body>
</html>
