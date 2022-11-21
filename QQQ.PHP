<?php
$a =$_POST['a'];


for($i=5; $i<$a+1 ; $i++ ){
    echo "$i,";
    
}
?>

<form action="QQQ.PHP" method="post">
    <input type="text" name="a"> 
    <input type="submit">
</form>