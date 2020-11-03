<html>
<title> PHP-Timbangan</title>

<body>
<form action = "PHP_timbangan.php" method = "POST">
Masukkan berat anda<input type ="TEXT" name ="nilai" value ="0" />
<input type="submit" value="Hasil"/>
<form>

<?PHP
if (POST [nilai1] >= 80)  //kesalahan
{
	$result = "Anda Berat"
}
ELSE
{
	$result = "Berat Anda Adalah Normal";
}

>                          //kesalahan pada penutup
Mesej untuk Anda:
<?PHP
ECHO "$result";
?>
</body>
</html>
