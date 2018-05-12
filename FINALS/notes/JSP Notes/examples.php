<!DOCTYPE HTML>
<html>

<head>
  <title>Java Server Pages</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <h1>Java Server Pages<a href="#"></a></h1>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="JSP.php">Discussion</a></li>
          <li class="current"><a href="#">Examples</a></li>
          <li><a href="../../userindex.php">Home</a></li>
      </div>
    </div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
        <!-- insert your sidebar items here -->
        </div>
        <div class="sidebar">
        </div>
        <div class="sidebar">
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Examples of JSP</h1>
        <h2>The Process Flow</h2>
          <p>This diagram basically shows the process flow in a JSP application</p>
        <span class="left"><img src="style/5.png" alt="example graphic" /></span>
    
         <p><h2>Servlets: Full Login Example</h2>
          In this section we are going to discuss the implementation of a complete Login application
          
         The application will 
         Ask the user to input his "username" and "password"
         Check the existence of this user in the Data Base
         If exists, Retrieve his first name and last name from the DB and display them
         If not registered, Display "Sorry, you are not registered"

        <p><h3>Implementation Steps</h3>
          <p>As mentioned in the application description, the user will have to enter his username and password, so first of all, we need a JSP that asks the user to input his username and password in their corresponding fields.</p>
          
          To have this JSP, please follow these steps:

          <p>Open eclipse
          <p>Create a new "Dynamic Web Project"
          <p>Name it "LoginExample"
          <p>Create the JSP
          <p>In the "Web Content" folder, create a new JSP
          <p>Name it "LoginPage"
          <p>Place this code
        <span class="left"><img src="style/6.png" alt="example graphic" /></span>
          As you can see; (in the LoginPage) when the user submits, the JSP calls "LoginServlet".This LoginServlet is intended to handle the Business logic associated with the request.
              
              Create the LoginServlet by following these steps:

           <p>In the "src" folder, create a new "Package"
           <p>Name it "ExamplePackage"
           <p>In the "ExamplePackage", create a new "Servlet"
           <p>Name it "LoginServlet"
          <p>Place this code</p>
        <span class="left"><img src="style/7.png" alt="example graphic" /></span>
          
          <head>
    
        <p><h2>JSP Files location in Web Application WAR File</h2>
        <p>We can place JSP files at any location in the WAR file, however if we put it inside the WEB-INF directory, we wont be able to access it directly from client.

        We can configure JSP just like servlets in web.xml, for example if I have a JSP example page like below inside WEB-INF directory:</p>
          
          <p>test.jsp</p>
        <span class="left"><img src="style/1.png" alt="example graphic" /></span>
         
        <p>And I configure it in web.xml configuration as:
          
        <span class="center"><img src="style/2.png" alt="example graphic" /></span>
        <span class="right"><img src="style/3.png" alt="example graphic" /></span>
        <p>
        - Then I can access it with both the URLs http://localhost:8080/FirstJSP/Test.do and http://localhost:8080/FirstJSP/Test1.do

         <p>Notice that container will create two instances in this case and both will have their own servlet config objects, you can confirm this    by visiting these URLs in browser.

        <p>For Test.do URI, you will get response like at the right side above.
        </p>
</html>
