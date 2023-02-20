<html>
<body>
<h1>Electricity Bill</h1>
<form method="post" action="#">
Consumer ID:<input type="number" name="id"><br>
Name:<input type="text" name="name"><br>
Previous Reading:<input type="number" name="prev"><br> 
Present Reading:<input type="number" name="pres"<br><br>>
<input="submit">
</form>    
<?php>

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $id=$_POST['id'];
  $name=$_POST['name'];
  $prev=$_POST['prev'];
  $pres=$_POST['pres'];
  $rate=$_POST['rate'];
  $units=$pres-$prev;
  echo"____________________________________";
  ECHO"<H3>"
  