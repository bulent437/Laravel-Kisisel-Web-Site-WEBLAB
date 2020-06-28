<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Yusuf Bülent AY Admin Panel</title>
        <link href="{{asset('panel/dist/')}}/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
#tablo {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tablo td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tablo tr:nth-child(even){background-color: #f2f2f2;}

#tablo tr:hover {background-color: #ddd;}

#tablo th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FF9900;
  color: white;
}

</style>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{ route('adminpanel')}}">Anasayfa</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="{{asset('panel/dist/')}}/#"><i class="fas fa-bars"></i></button>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="{{asset('panel/dist/')}}/#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="{{route('login.show')}}">Çıkış yap</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Admin Paneli</div>
                            <a class="nav-link" href="{{ route('adminpanel')}}">
                                
                                Üye İşlemleri
                            </a>                            
                            <a class="nav-link collapsed" href="{{asset('panel/dist/')}}/#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Duyuru İşlemleri
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{ route('duyuru-ekle') }}">Duyuru Ekle</a>
                                    <a class="nav-link" href="{{ route('duyuru-goruntule') }}">Duyuruları Görüntüle</a>
                                </nav>
                            </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" >
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                ..
                            </a>
                            <a class="nav-link" >
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                ..
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <form method="GET" action="{{route('duyuruyu-ekle')}}">
                <table id="tablo">
                <tr><th>Duyuru Ekleme</th></tr>
                <tr><td>Duyuru Başlığı</td></tr>
                <tr><td><input type="text" name="baslik"></td></tr>
                <tr><td>Duyuru İçeriği</td></tr>
                <tr><td> <textarea type="text" name="yazi"> </textarea> </td></tr>
                <tr><td><button type="submit">Duyuruyu ekle</button></td></tr>
                        </form>
                                
                        </table>
                        </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('panel/dist/')}}/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('panel/dist/')}}/assets/demo/chart-area-demo.js"></script>
        <script src="{{asset('panel/dist/')}}/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('panel/dist/')}}/assets/demo/datatables-demo.js"></script>
    </body>
</html>
