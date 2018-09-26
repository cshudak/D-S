<?php

require '../../app/common.php'
//get the $taskid

$taskid = $_GET['$taskid'] ?? 0);

// Fetch Work from Database
$work = work::findByTaskID($taskID);


//convert to JSON and print

echo json_encode($work);
