<?php
// Read JSON file
$jsonData = file_get_contents('transcript.json');

// Decode JSON data into associative array
$transcriptData = json_decode($jsonData, true);

// Define grade points based on letter grades
$gradePoints = [
    'A+' => 5,
    'A' => 4,
    'A-' => 3.5,
    'B' => 3,
    'C' => 2,
    'D' => 1,
    'F' => 0
];

// Assign letter grades to individual variables for subjects
$letterGradeBan = $transcriptData['bangla'];
$letterGradeEng = $transcriptData['english'];
$letterGradeICT = $transcriptData['ICT'];
$letterGradePhy = $transcriptData['physics'];
$letterGradeChe = $transcriptData['chemistry'];
$letterGradeHM = $transcriptData['higherMathematics'];
$letterGradeBio = $transcriptData['biology'];
?>
