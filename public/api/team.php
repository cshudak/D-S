<?php

require '../../app/common.php'



// Fetch team from Database
$teams = Team::findAll();


//convert to JSON and print

echo json_encode($teams);
