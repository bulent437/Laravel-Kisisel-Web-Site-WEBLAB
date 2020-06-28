@extends('template')

@section('icerik')
<style type="text/css">

.form-style-6 h1{
    background: #FE6903;
    padding: 20px 0;
    font-size: 140%;
    font-weight: 300;
    text-align: center;
    color: #fff;
    margin: -16px -16px 16px -16px;
}
.form-style-6{
    font: 95% Arial, Helvetica, sans-serif;
    max-width: 600px;
    margin: 10px auto;
    padding: 16px;
    background: #F7F7F7;
}

.form-style-6 input[type="submit"],
.form-style-6 input[type="button"]{
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 3%;
    background: #FE6903;
    color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #333333;
    transition: 500ms;
}
</style>
<script>
function olustur(){
var pdf = new jsPDF('p', 'pt', 'letter');
source = $('#HTMLtoPDF')[0];
specialElementHandlers = {
    '#bypassme': function(element, renderer){
        return true
    }
}
margins = {
    top: 50,
    left: 60,
    width: 545
  };
pdf.fromHTML(
      source // HTML string or DOM elem ref.
      , margins.left // x coord
      , margins.top // y coord
      , {
          'width': margins.width // max width of content on PDF
          , 'elementHandlers': specialElementHandlers
      },
      function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF
        //          this allow the insertion of new lines after html
        pdf.save('cv.pdf');
      }
  )		
}
var isEditable = document.getElementById("HTMLtoPDF").isContentEditable

function Edit() {
    isEditable = !isEditable
    document.getElementById("HTMLtoPDF").contentEditable = isEditable
    if (isEditable) {
        document.getElementById("duzenle").innerHTML = "Onayla"
    } else {
        document.getElementById("duzenle").innerHTML = "Düzenle"
    }
}
    </script>
<body>
<div class="main">
<div class="icerik">
<div class="form-style-6">
<h1>CV</h1>
<form id="about">
<div class="about" >
        <div id="HTMLtoPDF" contenteditable="false">

            <h2>Kisisel Bilgiler</h2>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Ad Soyad</h3>
                </div>
                <div class="aboutRight">
                    <p>Yusuf Bulent AY</p>
                </div>
            </div>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Telefon
                    </h3>
                </div>
                <div class="aboutRight">
                    <p>0537 9684589</p>
                </div>
            </div>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Mail</h3>
                </div>
                <div class="aboutRight">
                    <p>bulent0637@gmail.com</p>
                </div>
            </div>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Adres</h3>
                </div>
                <div class="aboutRight">
                    <p>Bagcilar/Istanbul</p>
                </div>
            </div>
            
            <h2>Hakkimda</h2>
            <div class="col">
                <p>1997 Istanbul dogumluyum.Universiteye kadar ki egitimimi Istanbulda tamamladim.Lisede Veri Tabani Programciligi okudum.vs vs bla bla</p>
            </div>
            <h2>Egitim</h2>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Lise</h3>
                </div>
                <div class="aboutRight">
                    <p>Otocenter MTAL - Bilisim Teknolojileri- </p>
                </div>
            </div>
            <div class="col">
                <div class="aboutLeft">
                    <h3>Universite</h3>
                </div>
                <div class="aboutRight">
                    <p>Kocaeli Universitei - Bilisim Sistemleri Mühendisligi</p>
                </div>
            </div>
            
        </div>
    </div>
<input type="button" id="duzenle" value="Düzenle" onClick="Edit()"/>
<input type="button" value="İndir" onClick="olustur()"/>
</form>
</div>
</div>
</div>
<div class="temizle"></div>

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
@endsection