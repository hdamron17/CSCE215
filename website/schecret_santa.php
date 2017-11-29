<head>
</head>
<body>

<?php
$form = <<<EOS
<form method="post">
Name: <input type="text" name="name"><br>
E-Mail: <input type="text" name="email"><br>
<input type="submit">
</form>
EOS;

//phpinfo();
switch ($_SERVER['REQUEST_METHOD']) {
  case "GET":
    echo($form);
    break;
  case "POST":
    $file = "schnacks.json";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $handle = fopen($file, "a") or die("Cannot open file: ".$file);
    fwrite($handle, $name."|~|".$email."\n");
    fclose($handle);
    	echo("Submitted ".$name." with email ".$email);
    break;
  default:
    http_response_code(405);
    die();
}
?>

</body>
