<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<?php include('baglan.php'); ?>
	<title>Linke Gidiliyor - <?php echo $sitead; ?></title>
	<script src="akdoganSayac.js" type="text/javascript"></script>
	<style type="text/css">
.unselectable {
	-moz-user-select: -moz-none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none;
	-ms-user-select: none;
	user-select: none
}
	</style>
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
<br/>
<icerik>
<script type="text/javascript">
$(function(){
	$("#kalan").akdoganSayac({
		'gun' : 0, 
		'saat' : 0, 
		'dakika' : 0,
		'saniye' : 7
	});
});

function engelleme() {
    document.getElementById('gitbtn').disabled = false;
}

window.onload = function() {
    window.setTimeout(engelleme, 7000);
}
</script>
<center>
<img src="http://www.kobitrend.com/wp-content/uploads/2016/07/250x300-reklam.jpg" alt="REKLAM -> 250x300" /><br/>
<?php
$sifree = $_POST['sifre'];
if($sifree == "") {header("Location: index.php");}
$iv = $_POST['veri'];
$query = $db->query("SELECT * FROM linkler WHERE veri = '$iv'")->fetch(PDO::FETCH_ASSOC);
if($query["sifre"] != $sifree) {

?><br/>
<div class="alert alert-danger" role="alert" style="width:70%;margin-right:auto;margin-left:auto;">
Şifre Hatalı!
</div>
<?php
}
else {
?><br/>
<div class="alert alert-success" role="alert" style="width:70%;margin-right:auto;margin-left:auto;">
Şifre doğru!<br/>Süre dolduktan sonra butona tıklayın...</div><div id="kalan"></div>
<button disabled="disabled" id="gitbtn" class="btn btn-primary" onclick="window.location = '<?php echo $query['url']; ?>';">Sayfaya Git!</button><br/>
<?php echo "Sayfa Adresi: <b><span class='unselectable'>".$query['url']."</span></b>"; ?><br/>
<?php
}
?>
<img src="https://i.hizliresim.com/4PM9R7.jpg" alt="REKLAM -> 728x90" />
</center>

</icerik>
<?php include("footer.php"); ?>
</body>
</html>