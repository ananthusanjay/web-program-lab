<html>
<head></head>
<title></title>
<body>
<form method="POST" action="#">
enter id<input type="text"  name="eid"><br>
enter name<input type="text"  name="ename"><br>
enter dept<input type="text"  name="dept"><br>
enter salary<input type="text"  name="sal"><br><br>
<input type="submit" name="submit">
</body>
</form>
</html>

<?php
$servername="localhost"; 
$username="root"; $password=""; 
$dbname="empdb"; 
$tbname="emp"; 
$conn=mysqli_connect($servername,$username,$password,$dbname); 
if(!$conn) 
{       
 die("Connection failed".mysqli_connect_error()); 
} 
else 
{         
echo "<br><h2 align=center>connected...</h2><br/>"; 
} 
$id=$_POST['eid']; 
$name=$_POST['ename']; 
$dep=$_POST['dept']; 
$salary=$_POST['sal']; 
//$sql=mysqli_select_db("$dbname")die("Couldnt select db"); 
$query="INSERT INTO emp(eid,ename,dept,sal) 
VALUES('".$id."','".$name."','".$dep."','".$salary."')"; 
$res=mysqli_query($conn,$query); 
if($res) 
{ 
        echo "SUBMITTED SUCCESSFULLY!!"; 
} 
else
 {         echo "ERROR"; 
} 
$sql="SELECT * FROM emp"; 
$res=mysqli_query($conn,$sql); 

if(mysqli_num_rows($res)>0) 
{ 
        echo "<table border=2 align=center>";         

       echo "<tr><th>Employee ID</th>";        
       echo "<th>Employee Name</th>";         
      echo "<th>Department</th>"; 
       echo "<th>Salary</th></tr>"; 

  
while($row=mysqli_fetch_assoc($res)) 
    { 
        echo "<tr><td>$row[eid]</td>";        
        echo "<td>$row[ename]</td>";        
        echo "<td>$row[dept]</td>"; 
        echo "<td>$row[sal]</td></tr>"; 
    } 

 echo "</table>"; 
} 
else
 {         
echo "0 records"; 
} 

mysqli_close($conn); 
?>
