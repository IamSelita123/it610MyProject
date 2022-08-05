<?php

echo "Hello from the docker container";

$mysqli = new mysqli("db", "root", "Alicia19", "Network");

$sql = "INSERT INTO device (name, device_type) VALUES('Palisades1', 'Switch')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO device (name, device_type) VALUES('Clifton2', 'Firewall')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO device (name, device_type) VALUES('Paterson2', 'F5')";
$result = $mysqli->query($sql);
$sql = "INSERT INTO device (name, device_type) VALUES('Passaic1', 'Router')";
$result = $mysqli->query($sql);


$sql = 'SELECT * FROM device';

if ($result = $mysqli->query($sql)) {
    while ($data = $result->fetch_object()) {
        $device[] = $data;
    }
}

foreach ($devices as $device) {
    echo "<br>";
    echo $device->name . " " . $device_type->device_type;
    echo "<br>";
}
