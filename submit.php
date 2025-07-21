<?php
// Save form data to a file
$data = $_POST['name'] . "," . $_POST['age'] . "," . $_POST['location'] . "," . $_POST['game'] . "," . $_POST['school'] . "\n";
file_put_contents("data.txt", $data, FILE_APPEND);

// Redirect to thank you page
header("Location: thankyou.html");
exit();
?>