

<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ahmet Baki Memiş | Borsa Analiz</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<style>
		

		body {text-align: center;font-size: 20px}
	</style>
	<title>	</title>
</head>
<body>	
<br>		
	<center><b>Created By Ahmet Baki Memiş</b></center><hr>	
<br>	
	<?php

	if (isset($_POST["gonder2"])) {
	
		$queryw=$_POST['query'];
	header("location:borsa2.php?id=".$queryw);
	echo $queryw;
	}



$dolars = json_decode(file_get_contents("https://finans.truncgil.com/today.json"),true);

echo "<i class=\"fa fa-usd\" ></i> DOLAR
 : ";print_r($dolars['ABD DOLARI']['Alış']);echo "<b>₺</b><br>";
	
echo "<hr>";


echo "<i class=\"fa fa-eur\" ></i> EURO : ";print_r($dolars['EURO']['Alış']);echo "<b>₺</b><br>";
	
echo "<hr>";

echo "<i class=\"fas fa-coins\"></i> Çeyrek Altın : ";print_r($dolars['Çeyrek Altın']['Alış']);echo "<b>₺</b><br><br><br>";




$finans = json_decode(file_get_contents("http://bigpara.hurriyet.com.tr/api/v1/hisse/list"),true);

?>
<form method="POST">
	<select class="form-control col-lg-3 col-12 m-auto" name="query">

<?php	for ($i = 0; $i < count($finans['data']); $i++) { ?>
	
	<option value="<?php print_r($finans['data'][$i]['kod']); ?>"><?php print_r($finans['data'][$i]['kod']); ?></option>

<?php 	}?>

</select>
<br>	
<button class="btn btn-primary" name="gonder2"><i class="fa fa-search">  </i> Hisse Bul </button>
	</form>
</body>
</html>
