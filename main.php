<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $data = "Latitude: " . $latitude . "\nLongitude: " . $longitude . "\n\n";

    $file = 'location_info.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    echo "Location data saved.";
}
?>
