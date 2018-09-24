<?php


//get the $taskid

$taskid = intval($_GET['$taskid'] ?? 0);
// Fetch Work from Database
$work = work::findByTaskID($taskID);


//convert to JSON and print

echo json_encode($work);
require '.../.../app/common.php';



  if ($taskid < 1) {
    throw new Exception ('Invalid Task ID')
  }
