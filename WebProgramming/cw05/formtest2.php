<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Form Data</title>
</head>
<body>

<h1>Raw Form Data</h1>
<pre>
<?php
   print_r($_POST);  // this prints the associative array for debugging
?>
</pre>

<!-- Extract each form item from posted data -->

<h1>Form input values</h1>
<p>Your Name: <?php print $_POST["visitor_name"] ?></p>
<p>Password: <?php print $_POST["password"] ?></p>
<p>License accepted: <?php print $_POST["licenseOK"] ?></p>
<p>Account type: <?php print $_POST["account_type"] ?></p>
<p>Options: <?php $arr = $_POST["options"]; $sep=""; print $arr[0];
  for ($i=1; $i<count($arr); $i++) {print ", ".$arr[$i];}?></p>
<p>Operating system: <?php print $_POST["system"] ?></p>
<p>Remarks: <?php print $_POST["remarks"] ?></p>

<!-- Run thru all elements of the array of posted data -->

<h1>All Form Data</h1>

<?php
  foreach($_POST as $key=>$val)
  {
    if ($key != "options")
      print "<p>$key = $val\n</p>";
    else {
      print "<p>$key = ";
      $arr = $_POST["options"]; $sep=""; print $arr[0];
      for ($i=1; $i<count($arr); $i++) 
        {
          print ", ".$arr[$i];
        }
    }
  }
?>

</body>
</html>