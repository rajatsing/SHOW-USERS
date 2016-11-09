<?php
$un=$_POST["usr"];
$c=mysql_connect("localhost","root","");
mysql_select_db("Registration",$c);
 $res=mysql_query("select * from register");
 echo "<table border=2 align='center'>";
 echo "<tr><td><h3>Name</h3></td><td><h3>Course</td></tr>";
  while( $ar=mysql_fetch_assoc($res))
  {
      echo "<tr><td>".$ar["Name"]."</td><td>". $ar["Course"]."</td></tr>";
  }
  echo "</table>";
 ?>