<html><head></head>
<body bgcolor="#ccccff">
<?php

  if( isset($_GET['a']) && isset($_GET['b'])&& $_GET['op'] =="+" ){
    echo (int)$_GET['a'] + (int)$_GET['b'];}

  
  else if( isset($_GET['a']) && isset($_GET['b'])&& $_GET['op'] =="-"  ){
    echo (int)$_GET['a'] - (int)$_GET['b'];}

  else if( isset($_GET['a']) && isset($_GET['b'])&& $_GET['op'] =="*"  ){
    echo (int)$_GET['a'] * (int)$_GET['b'];}

  
  else if( isset($_GET['a']) && isset($_GET['b'])&& $_GET['op'] =="/"  ){
    echo (int)$_GET['a'] / (int)$_GET['b'];}

?>

<form action="QQQQ.PHP" method="_GET">
    <input type="text" name="a">
    <select name="op" >
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="b">
     <input type="submit" name="">
</form>
 
</body></html>