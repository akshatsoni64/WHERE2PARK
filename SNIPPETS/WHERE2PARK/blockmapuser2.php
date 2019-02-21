<!DOCTYPE html>
<html>
<head>
    <?php include'admin.php'; ?>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/blockma.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
  
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