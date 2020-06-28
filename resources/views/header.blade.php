<div id="header">
    <div id="logo" >
        <a href="index.html"><img src="{{asset('webproje')}}/LOGO.png" style="width: 150px;height: 50px;"></a>
    </div>
    <div id="menu">
        <label for="show-menu" class="show-menu">Menüyü Göster</label>
        <input type="checkbox" id="show-menu" role="button">
        <ul id="menu" >
        <li><a href="{{ route('home') }}">ANASAYFA</a></li>
        <li><a href="{{ route('hakkimda') }}">HAKKIMDA-CV</a></li>
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('admin-formu').submit();">
                            <?php  
                             if(Auth::check()){
                             if(auth()->user()->yetki == '1')
							 echo  ("Admin Paneli");
							 else{
								
							 }} ?>
							 
	   
					</a></li>
					<form id="admin-formu" action="{{route('adminpanel') }}" method="POST" style="display: none;"> 
						{{ csrf_field() }}
					</form>

        <li><a href="{{ route('iletisim') }}">İLETİŞİM</a></li>
        <li><a href="#" onclick="event.preventDefault(); document.getElementById('cikis-formu').submit();">
        <?php           if(Auth::check()){
                         echo  ("Çıkış Yap");
                        }
                        else{
                          echo ("Giriş Yap");
                        } ?>
        
					</a></li>
					<form id="cikis-formu" action="{{ route('logout') }}" method="POST" style="display: none;"> 
						{{ csrf_field() }}
					</form>

      </ul>
     </div>
    <div class="temizle"></div>
    </div>