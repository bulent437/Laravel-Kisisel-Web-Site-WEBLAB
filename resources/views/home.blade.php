@extends('template')

@section('icerik')
<div class="slider">
<div class="w3-content w3-section" style="width: 80%;max-width: 1600px;height: 300px;">
  <img class="mySlides" src="{{asset('webproje')}}/a.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="{{asset('webproje')}}/b.jpg" style="width:100%;height: 100%">
  <img class="mySlides" src="{{asset('webproje')}}/c.jpg" style="width:100%;height: 100%">
</div>
<div class="temizle"></div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="icerik">
    <div class="icerik-sol">
        <center><h3 style="color: #33383b;border-bottom: 2px solid #33383b;">Haberler</h3>
        <br/></center>
        @foreach($icerikler as $icerik)
            <div class="makale">
                <a href="haber1.html">
                <img src="{{asset('webproje')}}/1.jpg">
                </a>
                <div class="makale-baslik"><a href="haber1.html">{{str_limit($icerik->baslik,50)}}</a></div>
                <div class="makale-yazi">{{str_limit($icerik->yazi,50)}}</div>
                <div class="devam"><a href="haber1.html">Devamını Oku</a></div>
                <div class="temizle"></div>
            </div>
        @endforeach
        
        <div class="temizle"></div>
        <div class="makale" style="margin-bottom: 5px">
        <div class="onceki">◄ Önceki</div>
        <div class="sonraki">Sonraki ►</div>
        <div class="temizle"></div>
        </div>
    </div>
    <div class="icerik-sag">
        <center><h3 style="color: #CCCCCC;border-bottom: 2px solid #CCCCCC;">Duyurular</h3>
        <br/></center>
        <div class="duyuru">
            <center>  <img src="{{asset('webproje')}}/1.jpg"/></center>            <div class="duyuru-baslik" >Duyurum bu</div>
        </div>
        <div class="duyuru">
            <center>  <img src="{{asset('webproje')}}/2.jpg"/></center>            <div class="duyuru-baslik" >Duyurum bu</div>
        </div>
    </div>
</div>
@endsection
