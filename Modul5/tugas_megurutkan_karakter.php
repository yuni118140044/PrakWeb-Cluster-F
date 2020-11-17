<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>pengurutan data</title>
</head>
<body>
  <?php

$data = array("lanirne", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat", "akjdh", "klfdsjls", "fuacd");

echo "Data acak sebelum diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}

sort($data); //fungsi mengurutkan dari kecil ke besar

echo "<br>Data acak Setelah diurutkan :<br>";
for ($x = 0; $x < count($data); $x++) {
  echo $data[$x] . "<br>";
}
?>
</body>
</html>