<head></head>
<body>
<?php
foreach (scandir(".") as $file) {
  print("<a href=".$file.">".$file."<br/></a>");
}
?>
</body>
