<?php
// Check if file was uploaded
if (isset($_FILES["file"])) {
  $file = $_FILES["file"];

  // Check for errors
  if ($file["error"] > 0) {
    echo "Error: " . $file["error"];
  }
  else {
    // Move file to upload directory
    move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);
    echo "File uploaded successfully";
  }
}
?>
