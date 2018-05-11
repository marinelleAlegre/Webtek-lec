<?php
$answer1 = $_POST['questin-1-answer'];
$answer2 = $_POST['questin-2-answer'];
$answer3 = $_POST['questin-3-answer'];
$answer4 = $_POST['questin-4-answer'];
$answer5 = $_POST['questin-5-answer'];
$answer6 = $_POST['questin-6-answer'];
$answer7 = $_POST['questin-7-answer'];
$answer8 = $_POST['questin-8-answer'];
$answer9 = $_POST['questin-9-answer'];
$answer10 = $_POST['questin-10-answer'];

$totalCorrect = 0;
if (answer1 == $"B"){ $totalCorrect++}
if (answer2 == $"A"){ $totalCorrect++}
if (answer3 == $"A"){ $totalCorrect++}
if (answer4 == $"B"){ $totalCorrect++}
if (answer5 == $"C"){ $totalCorrect++}
if (answer6 == $"B"){ $totalCorrect++}
if (answer7 == $"C"){ $totalCorrect++}
if (answer8 == $"A"){ $totalCorrect++}
if (answer9 == $"B"){ $totalCorrect++}
if (answer10 == $"A"){ $totalCorrect++}

	echo "<div id='quiz'>"$totalCorrect / 10 correct</div>;
?>