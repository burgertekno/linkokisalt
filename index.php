<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<?php include('baglan.php'); ?>
	<title><?php echo $sitead; ?></title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="/"><?php echo $sitead; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/">Anasayfa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Hakkında</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://teknoburger.blogspot.com.tr">Tekno Burger</a>
      </li>
    </ul>
  </div>
</nav>
<icerik><br/><br/>
<script type="text/javascript">
function ValidURL(str) {
  var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;
  if(!regex .test(str)) {
	$('#uyari').modal();
	document.getElementById("urlekle").value = "";
    return false;
  } else {
    return true;
  }
}</script>
<div class="modal fade" id="uyari" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">URL Geçersiz!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Lütfen geçerli bir URL adresi girin. URL adresinde <b>http</b> veya <b>https</b> olmak zorundadır.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">TAMAM</button>
      </div>
    </div>
  </div>
</div>
<div class="card" style="width:97%;margin-right:auto;margin-left:auto;">
  <div class="card-body">
    <h5 class="card-title">Hemen URL Kısalt!</h5>
    <p class="card-text">
	<form method="POST" action="olustur.php" id="form1">
<div class="input-group input-group-lg" style="width:99%;margin-right:auto;margin-left:auto;">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg" >Uzun URL</span>
  </div>
  <input type="text" id="urlekle" class="form-control" name="uzunurl" aria-label="Uzun URL" aria-describedby="inputGroup-sizing-sm" onchange="ValidURL(this.value);"></input><br/>
    <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" onclick="document.getElementById('form1').submit();">Kısalt</button>
  </div>

</div></div>
<div class="input-group" style="width:99%;margin-right:auto;margin-left:auto;">
<h5>Ayarlar:</h5>
  <div class="input-group-prepend" style="width:100%;">
    <div class="input-group-text" style="border-radius:.3rem;border-top-right-radius:0;border-bottom-right-radius:0;">
	  Şifre
  </div>
  <input type="text" class="form-control" aria-label="Şifre" name="sifre"></input>
  <div class="input-group-append" style="height:100%;">
<div class="input-group-text" style="height:100%;display:table;border-top-left-radius:0;border-bottom-left-radius:0;">
	  <div style="display:table-cell;vertical-align:middle;">  
	  <input type="checkbox" aria-label="Şifre" name="sifree" value="ssifre"></input></div>
  </div>
  </div>
  </div>
 </div>
  </form>

	</p>
  </div>
</div>


<br/><br/>
<div class="card" style="width:97%;margin-right:auto;margin-left:auto;">
  <div class="card-header">
    Neden <b><?php echo $sitead; ?></b>?
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Tek cümleyle özetlemek gerekirse, <b><?php echo $sitead; ?></b> sade, hızlı, ücretsiz, fonksiyonel bir link kısaltma servisidir.</p>
    </blockquote>
  </div>
</div><br/><br/>
<div class="card" style="width:97%;margin-right:auto;margin-left:auto;">
  <div class="card-header">
    Kısa Link Şifreleme Nasıl Yapılır?
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Oluşturduğunuz kısa linkleri şifrelemek için "Ayarlar" bölümünde bulunan kutuya şifreyi girdikten sonra tik kutusunu işaretlemeniz gereklidir.</p>
    </blockquote>
  </div>
</div>


</icerik>
<?php include("footer.php"); ?>
</body>
</html>