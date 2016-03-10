<center>
<h1 style="margin-top:40VH;font-size: 6em;font-family:Arial">
<?php
  $function = $_POST["f"];
  $val1 = $_POST["val1"];
  $val2 = $_POST["val2"];
  if ($val1 === "9" && $val2 === "10" && $function === "+") {
    echo "21";
  } else {
  switch ($function) {
    case '*':
      echo "$val1 * $val2 = " . $val1 * $val2;
      break;
    case '+':
      echo "$val1 + $val2 = " . $val1 + $val2;
      break;
    case '-':
      echo "$val1 - $val2 = " . $val1 - $val2;
      break;
    case '/':
      echo "$val1 / $val2 = " . $val1 / $val2;
      break;
    default:

      break;
  }
}
?>
</h1>
</center>
