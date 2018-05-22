<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>PHP Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="icon" type="image/png" href="img/logo.png">
</head>

<body>

	<div id="page-wrap">

		<h1>PHP QUIZ</h1>
		
		<form action="grade.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
                    <h3>You can define a constant by using the define() function. Once a constant is defined</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A">A) It can never be change or undefined</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required/>
                        <label for="question-1-answers-B">B) It can be change and can be undefined</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" required/>
                        <label for="question-1-answers-C">C) It can never be changed but can be undefined</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" required/>
                        <label for="question-1-answers-D">D) It can be changed but can not be undefined</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>What is the output?</h3> <p> ?php $x=array(1,3,2,2,7,8,9,7,3);$y=array_count_values($x);echo$y[8];? </p>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/>
                        <label for="question-2-answers-A">A) 43</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" required/>
                        <label for="question-2-answers-B">B) 1</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required/>
                        <label for="question-2-answers-C">C) 6</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" required/>
                        <label for="question-2-answers-D">D) 8</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Is PHP can support multiple inheritance?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/>
                        <label for="question-3-answers-A">A) No</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" required/>
                        <label for="question-3-answers-B">B) Yes</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h3>Which of the following function returns the number of characters in a string variable?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-4-answers-A">A) len($variable)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" required/>
                        <label for="question-4-answers-B">B) count($variable)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" required/>
                        <label for="question-4-answers-C">C) strcount($variable)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" required/>
                        <label for="question-4-answers-D">D) strlen($variable)</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Variable scope on which a variable does not loose its value when the function exists and use that value if the function is called again is</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A">A)  static</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required/>
                        <label for="question-5-answers-B">B) Local</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" required/>
                        <label for="question-5-answers-C">C) function parameter</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" required/>
                        <label for="question-5-answers-D">D) None of above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>To produce the output I love the summer time, Which of the following statement should be used?
a. <?php print("<P>I love the summer time</p>");?>

b. <?php $season = "summer time"; print("<P>I love the $season</p>"); ?>

c. <?php $message = "I love the $season"; echo $message; ?></h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                        <label for="question-6-answers-A">A)  a</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" required/>
                        <label for="question-6-answers-B">B) a and c</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" required/>
                        <label for="question-6-answers-C">C) a and b</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" required/>
                        <label for="question-6-answers-D">D) all of the above</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of following variable assignment is 'by value' assignment in PHP ?</h3>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                        <label for="question-7-answers-A">A)  $value1= $value?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" required/>
                        <label for="question-7-answers-B">B) $value1= # $value?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" required/>
                        <label for="question-7-answers-C">C) $value1= & $value?</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" required/>
                        <label for="question-7-answers-D">D) None</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Identify the variable scope that is not supported by PHP ?</h3>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/>
                        <label for="question-8-answers-A">A)  Local variables</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" required/>
                        <label for="question-8-answers-B">B) Function parameters</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" required/>
                        <label for="question-8-answers-C">C) Hidden variables</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" required/>
                        <label for="question-8-answers-D">D) Global variables</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Which of the following mode of fopen() function opens a file only for writing. If a file with that name does not exist, attempts to create anew file. If the file exist, place the file pointer at the end of the file after all other data.</h3>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/>
                        <label for="question-9-answers-A">A)  W</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" required/>
                        <label for="question-9-answers-B">B) W+</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" required/>
                        <label for="question-9-answers-C">C) A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" required/>
                        <label for="question-9-answers-D">D) A+</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How do you get information from a form that is submitted using the "get" method?</h3>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/>
                        <label for="question-10-answers-A">A)  $_GET[];</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" required/>
                        <label for="question-10-answers-B">B) Request.Form;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" required/>
                        <label for="question-10-answers-C">C) Request.QueryString;</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" required/>
                        <label for="question-10-answers-D">D) $_POST[];</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Bonus question PHP variables are_____ ?</h3>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-A" value="A" required/>
                        <label for="question-11-answers-A">A)  Multitype variables</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-B" value="B" required/>
                        <label for="question-11-answers-B">B) Single type variable</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-C" value="C" required/>
                        <label for="question-11-answers-C">C) Double type variables</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-11-answers" id="question-11-answers-D" value="D" required/>
                        <label for="question-11-answers-D">D) Trible type variables</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input type="submit" value="Submit" />
		
		</form>
	
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