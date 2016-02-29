
<?php require_once('conector/conector.php');?> 

<?
$dbh=mysql_connect ($hostname,$username,$password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database); 

$resultinfo = mysql_query("SELECT * FROM informacion WHERE cod  LIKE '0'");

?>






<head>
<title><? while ($row=mysql_fetch_array($resultinfo))  { echo "".$row["nombre"].""; }
mysql_free_result($resultinfo)?></title>


</head>
<body>
<p>
  <?php						 
          	
           if ( $id2  == 'calend1' )
			  { 
			  	include("demo33.php"); 	
                 } 
			else  
           if ( $id2  == 'calend2' )
			  { 
			include("demo3.php"); 		
                 } 
				 else 
           if ( $id2  == 'calend3' )
			  { 
			include("planning.php"); 		
                 } 
				
		 ?>

</body>
</html>
