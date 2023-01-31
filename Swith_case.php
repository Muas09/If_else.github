<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mong = "mong3";

switch ($mong) {
  case "mong3":
    echo "Hôm nay là mồng 3";
    break;
  case "mong4":
    echo "Hôm nay là mồng 4";
    break;
  case "mong5":
    echo "Hôm nay là mồng 5";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
?>
</body>
</html>