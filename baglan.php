    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous" />
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<style>
	icerik {margin-left:5px;margin-right:5px;}
	body {width:100%;height:100%;}
	img {max-width: 100%;height:auto;}
	.navbar {background-color:#2980b9;color:#ffffff;}
	.nav-link {color:#ffffff;}
	nav > a {color:#f1c40f;}
#sosyal-footer {
background-color:#45668e;
font-size:30px;
width:100%;
padding-top:10px;
padding-bottom:10px;
height:auto;
}
#sosyal-footer a {
color:#ffffff;
padding-right:10px;
}
#sosyal-yazi {
background-color:#32506d;
color: #fffc00;
width:100%;
padding-top:10px;
padding-bottom:10px;
height:auto;
text-align:center;
}
	</style>
<?php
$sitead = "LinkoKısalt";
try {
     $db = new PDO("mysql:host=localhost;dbname=kisa", "root", "12345678");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>    