<?php
$targetDir = "uploads/";  // uploads नाम का folder बनाना पड़ेगा
$targetFile = $targetDir . basename($_FILES["file"]["name"]);

if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "✅ File uploaded successfully: " . basename($_FILES["file"]["name"]);
} else {
    echo "❌ Sorry, there was an error uploading your file.";
}
?>