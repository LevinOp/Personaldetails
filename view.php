<?php
$secret_key = "levin123"; // change this to your own secret

if ($_GET['key'] !== $secret_key) {
  echo "<h1 style='color: white; background: black; padding: 20px;'>Access Denied</h1>";
  exit();
}

$data = file("data.txt");
echo "<body style='background-color: black; color: white; font-family: Arial; padding: 20px;'>";
echo "<h1>Submitted Forms</h1>";
echo "<ul>";
foreach ($data as $line) {
  echo "<li>" . htmlspecialchars($line) . "</li>";
}
echo "</ul></body>";
?>