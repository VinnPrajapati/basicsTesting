<?php
error_reporting(E_ALL);
$sourceFolder = 'TestDocs/';
$destinationFolder = 'folder2/';
$files = glob($sourceFolder . '*');

// Loop through the files and move them to the destination folder
foreach ($files as $file) {
    // Get the filename from the path
    $filename = basename($file);

    // Construct the new path in the destination folder
    $newPath = $destinationFolder . $filename;

    // Move the file
    if (rename($file, $newPath)) {
        echo "File '$filename' moved successfully.\n";
    } else {
        echo "Error moving file '$filename'.\n";
    }
}
