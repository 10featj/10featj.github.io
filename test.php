<?php
include 'connect.php';
$job_id = $_POST["job"];
$email = $_POST["email"];
$result = $conn->query("SELECT * FROM saved_jobs where email='$email' and saved_job='$job_id'");
$row_cnt = $result->num_rows;
$job = $row_cnt;
echo $job;
?>