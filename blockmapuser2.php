<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/blockma.css">
	<?php require 'lib.php';?>
	<title></title>
</head>
<body>
<?php require 'admin.php'; ?>
<center><?php
	echo "<table class='blockmap2 'border=1 style='border-collapse: collapse; margin-left:10px;'>";
    for ($row=1; $row <= 5; $row++) {
        echo "<tr> ";
        for ($col=1; $col <= 5; $col++) {
           $p = $col * $row;
           echo "<td  style='margin-left:10px;'>$p</td> ";
            }
            echo "</tr>";
        }
        echo "</table>";
?></center>
</form>
</body>
</html>
