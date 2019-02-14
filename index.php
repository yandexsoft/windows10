<?php
$zip = new ZipArchive;
$res = $zip->open('wordpress.zip');
if ($res === TRUE) {
  $zip->extractTo('sc/');
  $zip->close();
  echo 'ok';
} else {
  echo 'failed';
}
?>
