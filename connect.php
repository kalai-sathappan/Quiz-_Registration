

<?php
$a=$_POST["n"];
$b=$_POST["a"];
$c=$_POST["d"];
$d=$_POST["g"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"]; 
$mysqli = new mysqli("localhost", "root", "root", "codebind");
$sql="insert into data(n,a,d,g,e,p,s) values('$a','$b','$c','$d','$e','$f','$g')";
echo("registered");
if ($mysqli->query($sql)) {
               printf("Record inserted successfully.<br />");
            }
            if ($mysqli->errno) {
               printf("Could not insert record into table: %s<br />", $mysqli->error);
            }
include("register.php");
            $mysqli->close(); 
            
            
            
?> 





