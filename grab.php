<?php
  $url = $_POST['url'];  // Retrieve the 'url' parameter from the POST data

  $data = file_get_contents($url);

  echo $data;
?>
