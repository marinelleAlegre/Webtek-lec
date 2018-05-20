<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/php; charset=UTF-8" />
	
	<title>Servlet Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Servlet Quiz Score</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];
            $answer9 = $_POST['question-9-answers'];
            $answer10 = $_POST['question-10-answers'];

            $totalCorrect = 0;
        
            if ($answer1 == "B"){ $totalCorrect++; }
            if ($answer2 == "A"){ $totalCorrect++; }
            if ($answer3 == "A"){ $totalCorrect++; }
            if ($answer4 == "B"){ $totalCorrect++; }
            if ($answer5 == "C"){ $totalCorrect++; }
            if ($answer6 == "B"){ $totalCorrect++; }
            if ($answer7 == "C"){ $totalCorrect++; }
            if ($answer8 == "A"){ $totalCorrect++; }
            if ($answer9 == "B"){ $totalCorrect++; }
            if ($answer10 == "A"){ $totalCorrect++; }
            
            echo "<div id='results'>$totalCorrect / 10 correct</div>";
            
        ?>
	
	</div>
	
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	var pageTracker = _gat._getTracker("UA-68528-29");
	pageTracker._initData();
	pageTracker._trackPageview();
	</script>

</body>

</html>