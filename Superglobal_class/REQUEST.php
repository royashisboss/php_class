<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Name: <input type="text" name="fname1">
  <input type="submit">
</form>



<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'] ;
  $name1 = $_REQUEST['fname1'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "$name $name1";
  }
}


?>

</body>
</html>