<?php

$date = $_POST['date'];
$subject = $_POST['subject'];
$time = $_POST['time'];
$notes = $_POST['notes'];

$file = "data/plans.json";
$data = json_decode(file_get_contents($file), true);

$newPlan = [
    "id" => time(),
    "date" => $date,
    "subject" => $subject,
    "time" => $time,
    "notes" => $notes
];

$data[] = $newPlan;
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

header("Location: view_plan.php");