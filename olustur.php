<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<?php include('baglan.php'); error_reporting(0); ?>
	<title>Kısa Link Oluşturuldu - <?php echo $sitead; ?></title>
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
<icerik>
<?php
date_default_timezone_set('Europe/Istanbul');
function generateRandomString($length = 7) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
$url = $_POST['uzunurl'];
$tarih = date('H:i:s - d.m.Y');
if($_POST['sifree'] == "ssifre")
{
$sifre = $_POST["sifre"];
}
else {
$sifre = "Belirlenmedi";
}
if ($url != "") {
$iv = generateRandomString();
$query = $db->prepare("INSERT INTO linkler SET url = '$url', tarih = '$tarih', id = null, veri = '$iv', sifre = '$sifre'");
$insert = $query->execute();
if ( $insert ){
    ?>
	<br/><br/>
	<div class="alert alert-success" role="alert" style="width:97%;margin-right:auto;margin-left:auto;">
Kısa Link Oluşturuldu!
</div><br/>
<div class="alert alert-info" role="alert" style="width:97%;margin-right:auto;margin-left:auto;">
  Uzun Link: <b><?php echo $url; ?></b><br/>
  Kısa Link: <b>http://127.0.0.1/kisaurl/git.php?id=<?php echo $iv; ?></b><br/>
  Şifre: <b><?php echo $sifre; ?></b><br/>
</div>
	<?php
}
}
else {
?>
<br/><br/>
<div class="alert alert-danger" role="alert" style="width:97%;margin-right:auto;margin-left:auto;">
URL adresini girmediğiniz için kısaltma işlemi yapılamadı. Lütfen anasayfaya gidip tekrar deneyin.
</div>
<?php } ?>
</icerik>
<?php include("footer.php"); ?>
</body>
</html>