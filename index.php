<!DOCTYPE html>
<html>
<body>
 
<?php    
$numbers=array("100","160","20","67");    
rsort($numbers);  
foreach( $numbers as $n )    
{    
  echo "$n<br />";    
}    
?>	
 
</body>
</html>
