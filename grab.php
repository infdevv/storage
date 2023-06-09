<?php
  $url = $_POST['url'];

  $data = file_get_contents($url);

  echo $data;
?>
