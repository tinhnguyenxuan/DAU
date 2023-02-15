<?php
if (isset($_GET["file"])) {
  $file = $_GET["file"];
  $path = "uploads/" . $file;

  // Check if file exists
  if (file_exists($path)) {
    // Send file to browser
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"$file\"");
    readfile($path);
  }
  else {
    echo "Error: File not found";
  }
}
?>
