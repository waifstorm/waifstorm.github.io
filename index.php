WAİFF
<?php
if (isset($_POST['topla']))
{
	echo $_POST['birincisayi'] + $_POST['ikincisayi'];
}
elseif(isset($_POST['cikar']))
{
	echo $_POST['birincisayi'] - $_POST['ikincisayi'];
}

elseif(isset($_POST['button2']))
{
	echo $_POST['birincisayi'] * $_POST['ikincisayi'];
}

elseif(isset($_POST['button3']))
{
	echo $_POST['birincisayi'] / $_POST['ikincisayi'];
}
	
else {

?>

<form name="form1" method="post" action="">
  <p>
    <label for="birincisayi">Birinci Sayı:</label>
    <input type="text" name="birincisayi">
  </p>
  <p>
    <label for="ikincisayi">İkinci Sayı:</label>
    <input type="text" name="ikincisayi">
  </p>
  <p>İşleminiz :</p>
  <p>
    <input type="submit" name="topla" value="Topla">
    <input type="submit" name="cikar"  value="Çıkar">
    <input type="submit" name="carp" value="Çarp">
    <input type="submit" name="bol" value="Böl">
  </p>
</form>

<?php  } ?>
