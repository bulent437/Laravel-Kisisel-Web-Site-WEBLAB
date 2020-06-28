@extends('template')
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
.form-style-6 input[type="text"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{
	box-shadow: 0 0 5px #FE6903;
	padding: 3%;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 input[type="tel"],
.form-style-6 textarea,
.form-style-6 select 
{
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	outline: none;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	background: #fff;
	margin-bottom: 4%;
	border: 1px solid #ccc;
	padding: 3%;
	color: #555;
	font: 95% Arial, Helvetica, sans-serif;
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
@section('icerik')
<div class="main">
<div class="icerik">
<div class="form-style-6">
<h1>Bana Ulaşın</h1>
<form action="https://formspree.io/mjvgknln" method="post">
<input type="text" name="Ad" placeholder="Ad" />
<input type="text" name="Soyad" placeholder="Soyad" />
<input type="text" name="DogumTarih" placeholder="Doğum Tarihi" />
<input type="tel" name="Telefon" placeholder="Telefon" />
<input type="email" name="Email" placeholder="E-Mail" />
<textarea name="Mesaj" placeholder="Mesajın"></textarea>
<input type="submit" value="Gönder" />
</form>
</div>
</div>
</div>
@endsection