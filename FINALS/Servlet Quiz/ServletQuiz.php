<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Context-Type" content="text/php"; charset="UTF-8"/>
    <title>Servlet Quiz</title>
    <link rel="stylesheet" type="text/css" href="quiz.css" />
    </head>
    
    <body>
        <div id="page-wrap">
            <h1>Servlet Quiz</h1>
            
            <form action="quiz_result" method="post" id="quiz">
            
                <ol>
                    
                    <li>
                        
                        <h2> When service() method of servlet gets called?</h2>
                        
	               <div>
	                   <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/> <label for="question-1-answers-A"> A) The service() method is called when the servlet is first created.</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" required/> <label for="question-1-answers-B"> B) The service() method is called whenever the servlet is invoked.</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" required/> <label for="question-1-answers-C"> C) Both A and B.</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" required/> <label for="question-1-answers-D"> D) None of the Above.  </label>
                    </div>  
                    </li>
                    
                    <li>
                        <h3> What is javax.servlet.http.HttpServlet?</h3>
	               <div>
	                   <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" required/> <label for="question-2-answers-A"> A) abstract class</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" required/> <label for="question-2-answers-B"> B) Interface</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" required/> <label for="question-2-answers-C"> C) Concreate class</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" required/> <label for="question-2-answers-D"> D) None of the Above. </label>
                    </div>
                    </li>
                    
                    <li>
	                   <h4> Which of the following is the correct order of filter life cycle phase methods?</h4>
	               <div>
	                   <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required/> <label for="question-3-answers-A"> A) init(), service(), destroy()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" required/> <label for="question-3-answers-B"> B) initialize(), service(), destroy()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" required/> <label for="question-3-answers-C"> C) init(), doFilter(), destroy()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" required/> <label for="question-3-answers-D"> D) init(), service(), delete()  </label>
                    </div>
                    </li>
                    
                    <li>
                        <h5> Which of the following code retrieves the context of the request?</h5>
	                <div>
	                   <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/> <label for="question-4-answers-A"> A) new ClassContextPath()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" required/> <label for="question-4-answers-B"> B) request.getContextPath()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" required/> <label for="question-4-answers-C"> C) response.getContextPath()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" required/> <label for="question-4-answers-D"> D) None of the Above.  </label>
                    </div>
                    </li>
                    
                    <li>
                        <h6> Which of the following is true about ini() method of filter?</h6>
	               <div>
	                   <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/> <label for="question-5-answers-A"> A) The init() method simply creates or loads some data that will be used throuhtout the life of the filter.</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" required/> <label for="question-5-answers-B"> B) The init() method is not called again and again for each user request.</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" required/> <label for="question-5-answers-C"> C) Both A and B</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" required/> <label for="question-5-answers-D"> D) None of the Above.  </label>
                    </div>
                    </li>
                    
                    <li>
                        <h2>Which of the following code is used to get session id of a HTTP Session object in servlets?</h2>
	               <div>
	                   <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/> <label for="question-6-answers-A"> A) session.getSessionId()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" required/> <label for="question-6-answers-B"> B) session.getId()</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-6-answers" id="question-6-answers-C" value="C" required/> <label for="question-6-answers-C"> C) session.getActiveId()</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-D" value="D" required/> <label for="question-6-answers-D"> D) None of the Above.  </label>
                    </div>
                    
                    </li>
                    <li>
                        <h3> Which of the following code is used to get three-letter abbreviation for this locale's language in servlet?</h3>
	               <div>
	                   <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/> <label for="question-7-answers-A"> A) response.getISO3Language</label>
                    </div>
                    
                    <div>
	                   <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" required/> <label for="question-7-answers-B"> B) Locale.getISO3Language</label>
                    </div>
                    
                    <div>
	                   <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" required/> <label for="question-7-answers-C"> C) request.getISO3Language()</label>
                    </div>
                    
                    <div>
	                   <input type="radio" name="question-7-answers" id="question-7-answers-D" value="D" required/> <label for="question-7-answers-D"> D) None of the Above.  </label>
                    </div>
                    </li>
                    
                    <li>
                    	<h4> Which of the following code retrieves the login of the user making this request?</h4>
	               <div>
	                   <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" required/> <label for="question-8-answers-A"> A) request.getRemoteUser</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" required/> <label for="question-8-answers-B"> B) response.getRemoteUser</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" required/> <label for="question-8-answers-C"> C) Header.getRemoteUser()</label>
                    </div>
                        
                    <div>
                        <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" required/> <label for="question-8-answers-D"> D) None of the Above.  </label>
                    </div>    
                    </li>
                    
                    <li>
                        <h5> Which of the following code can be used to redirect user to different url?</h5>
	               <div>
	                   <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" required/> <label for="question-9-answers-A"> A) request.sendRedirect(location)</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" required/> <label for="question-9-answers-B"> B) response.sendredirect(location)</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-9-answers" id="question-9-answers-C" value="C" required/> <label for="question-9-answers-C"> C) header.sendRedirect(location)</label>
                    </div>
                        
                    <div>
	                   <input type="radio" name="question-9-answers" id="question-9-answers-D" value="D" required/> <label for="question-9-answers-D"> D) None of the Above.  </label>
                    </div>
                    </li>
                    
                    <li>
                        <h6>Which of the following code is used to get session in servlet?</h6>
	               <div>
	                   <input type="radio" name="question-10-answers" id="question-10-answers-A" value="A" required/> <label for="question-10-answers-A"> A) request.getSession()</label>
                    </div>
                        
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-B" value="B" required/> <label for="question-10-answers-B"> B) response.getSession()</label>
                    </div>
                        
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-C" value="C" required/> <label for="question-10-answers-C"> C) new Session()</label>
                    </div>
                        
                    <div>
                        <input type="radio" name="question-10-answers" id="question-10-answers-D" value="D" required/> <label for="question-10-answers-D"> D) None of the Above.  </label>
                    </div>
                    </li>
                    
                </ol>
                <input type="submit" value="Submit Quiz" />

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