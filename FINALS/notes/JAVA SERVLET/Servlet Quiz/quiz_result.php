<?php
$answer1 = $_POST['questin-1-answers'];
$answer2 = $_POST['questin-2-answers'];
$answer3 = $_POST['questin-3-answers'];
$answer4 = $_POST['questin-4-answers'];
$answer5 = $_POST['questin-5-answers'];
$answer6 = $_POST['questin-6-answers'];
$answer7 = $_POST['questin-7-answers'];
$answer8 = $_POST['questin-8-answers'];
$answer9 = $_POST['questin-9-answers'];
$answer10 = $_POST['questin-10-answers'];

$totalCorrect = 0;

if ($answer1 == "B") { $totalCorrect++; }
if ($answer2 == "A") { $totalCorrect++; }
if ($answer3 == "A") { $totalCorrect++; }
if ($answer4 == "B") { $totalCorrect++; }
if ($answer5 == "C") { $totalCorrect++; }
if ($answer6 == "B") { $totalCorrect++; }
if ($answer7 == "C") { $totalCorrect++; }
if ($answer8 == "A") { $totalCorrect++; }
if ($answer9 == "B") { $totalCorrect++; }
if ($answer10 == "A") { $totalCorrect++; }

	echo "<div id='results'>$totalCorrect / 10 correct</div>";
?>