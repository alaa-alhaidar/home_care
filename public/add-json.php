

<?php
$filePath = 'data.json';

$json_file = file_get_contents('php://input'); 

if (!empty($json_file)) {
    // to avoid repeat, delete the existing file and save new files after updating
    if (file_exists($filePath)) {
        unlink($filePath);
    }
    // Save in directory
    file_put_contents($filePath, $json_file);

    echo 'success';
} else {
    echo 'Failed';
}

?>