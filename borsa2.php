




<!DOCTYPE html>
<html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<style>
		

		body {text-align: center;font-size: 20px}
	</style>
	<title>	</title>
</head>
<body>
	<center><b>Created By Ahmet Baki Memiş</b></center><hr>	








<?php

$finans = json_decode(file_get_contents("http://bigpara.hurriyet.com.tr/api/v1/borsa/hisseyuzeysel/".$_GET["id"]),true);

echo "<pre>";
echo "SEMBOL : ";
print_r($finans['data']['hisseYuzeysel']['sembol']);echo "<hr>";
echo "ALIŞ : ";print_r($finans['data']['hisseYuzeysel']['alis']);echo "<hr>";
echo "SATIŞ : ";print_r($finans['data']['hisseYuzeysel']['satis']);echo "<hr>";
echo "AÇILIŞ : ";print_r($finans['data']['hisseYuzeysel']['acilis']);echo "<hr>";
echo "Hacim Lot : ";print_r($finans['data']['hisseYuzeysel']['hacimlot']);echo "<hr>";

echo "Kapanış : ";print_r($finans['data']['hisseYuzeysel']['kapanis']);echo "<hr>";
echo "KapanışS1 : ";print_r($finans['data']['hisseYuzeysel']['kapaniS1']);echo "<hr>";
echo "Tavan : ";print_r($finans['data']['hisseYuzeysel']['tavan']);echo "<hr>";
echo "Taban : ";print_r($finans['data']['hisseYuzeysel']['taban']);echo "<hr>";

echo "Dünkü Kapanış : ";print_r($finans['data']['hisseYuzeysel']['dunkukapanis']);echo "<hr>";

echo "Yüzde Değişimi : ";print_r($finans['data']['hisseYuzeysel']['yuzdedegisimS1']);echo "<hr>";

echo "Öz Sermaye : ";print_r($finans['data']['hisseYuzeysel']['ozsermaye']);echo "<hr>";
echo "Açıklama : ";print_r($finans['data']['hisseYuzeysel']['aciklama']);echo "<hr>";
echo "Tarih : ";print_r($finans['data']['hisseYuzeysel']['tarih']);echo "<href	>";


echo("</pre>")
?>















</body>

</html>


