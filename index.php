<?php
$num=$_GET['n'];
$p=$num;
while((int)$num!=0)
{
$rem=$num%10;
$sum=$sum*10+$rem;
$num=$num/10;

}
if($sum==$p)
{
echo $p.” is palindrome number”;
}
else
{
echo $p.” is not palindrome number”;
}
?>

<form>
enter your number<input type=”text” name=”n”/>
<input type=”submit” value=”Chk Result”/>
</form>
