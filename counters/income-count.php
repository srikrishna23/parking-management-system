<?php

include './includes/dbconn.php';

$result = mysqli_fetch_assoc(mysqli_query($con, "SELECT SUM(ParkingCharge) AS totalCharge FROM vehicle_info"));
echo $result['totalCharge'];

?>