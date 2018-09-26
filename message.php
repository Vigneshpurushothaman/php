<form method="post" action="">
Data 1:<input type="text" name="x">
<input type="submit" value="submit" name="submit">
</form>
<?php
$data1 = $_POST['x']; 
$submit=fopen("vignesh.txt",'w');
$submit=fwrite($submit,$data1);
if($submit)
{
	echo "write the text";
}
?>
