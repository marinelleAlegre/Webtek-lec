<!DOCTYPE HTML>
<html>

<head>
  <title>textured_green</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="Java Servlet.html">Java Servlet</a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li class="selected"><a href="index.html">Notes</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <form method="post" action="#" id="search_form">
        </form>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>What is Java Servlet?</h1>
        <p>Servlet is a JAVA programming language class used to extend the capabilities of server that host applications accessed by means of a request-response programming model.Servlets can respond to any type of request, they are commonly used to extend the applications hosted by web servers.A servlet can almost be thought of as an applet that runs on the server side--without a face. Java servlets make many Web applications possible.</p>
          
        <h2>Features of Java Servlet</h2>
        <ul>
          <li>Portable</li>
            <p>You can create a servlet on Windows operating system that users GlassFish as web server and later run it on any other operating system like Unix, Linux with Apache tomcat web server, this feature makes servlet portable.</p>
          <li>Efficient and Scalable</li>
            <p>Once a servlet is deployed and loaded on a web server, it can instantly start fulfilling request of clients. The web server invokes servlet using a lightweight thread so multiple client requests can be fulling by servlet at the same time using the multithreading feature of Java.</p>
          <li>Robust</li>
            <p>By inheriting the top features of Java the servlet is less prone to memory management issues and memory leaks.</p>
        </ul>
          <h1>How servlet works?</h1>
          <p>There are 3 ways to create a servlet.

               <p>1.	By extending GenericServlet class.
               <p>2.	By extending HttpServlet class.
               <p>3.	By implementing Servlet Interface.
          </p>
          
          <h2>A.Generic Servlet</h2>
          <p>If you are creating a Generic Servlet then you must extend javax.servlet.GenericServlet class. GenericServlet class has an abstract service() method, which the subclass of GenericServlet should always override the service() method.</p>
          <h2>B.HTTP Servlet</h2>
          <p>In creating Http Servlet you must extend javax.servlet.http.HttpServlet class, which is an abstract class. Unlike the Generic Servlet, HTTP Servlet doesn’t override the service() method but instead it overrides one or more of the following methods. At least one method from the list below:</p>
          <table style="width:100%; border-spacing:0;">
          <tr><td>doGet()</td><td>Called by the servlet service method to handle the HTTP GET request from client.</td></tr>
          <tr><td>doPost()</td><td>Used for posting information to the Server</td></tr>
           <tr><td>doPut()</td><td>Similar to doPost method but unlike doPost method we send information to the server, this method sends file to server.</td></tr>
           <tr><td>doDelete()</td><td>Allows client to delete a document, webpage, or information from the server</td></tr>
           <tr><td>destroy()</td><td>Used for managing resources that are held for the life of the servlet.</td></tr>
            <tr><td>getServletInfo()</td><td>Returns information about the servlet, such as author, version, and copyright.</td></tr>
        </table>
          <h2>C.Servlet Interface</h2>
          <p>Servlet interface provides common behavior to all the servlets. Its interface needs to be implemented for creating any servlet (either direct or indirectly). It provides 3 life cycle methods that are used to initialize the servlet, to serve the requests, and destroy the servlet and 2 non-life cycle methods</p>
          <h1>Methods of Servlet Interface</h1>
        <table style="width:100%; border-spacing:0;">
          <tr><th>Method</th><th>Description</th></tr>
          <tr><td>public void init(ServletConfigconfig)</td><td>Initializes the servlet. Invoked by the web container only once.</td></tr>
          <tr><td>public void service(ServletRequest request, Servletresponse response)</td><td>Provides response for incoming request. Invoked at each request by we container.</td></tr>
            <tr><td>public void destroy()</td><td>Invoked only once and indicates that servlet is being destroyed.</td></tr>
            <tr><td>public ServletConfiggetServletConfig()</td><td>Returns the object of ServletConfig.</td></tr>
            <tr><td>public string getServletInfo()</td><td>Returns information about servlet suc as writer, copyright, version etc.</td></tr>
        </table>
          <h2>Life Cycle of Java Servlet</h2>
          <p>Web container maintains the life cycle of a servlet instance. The life cycle of the servlet:

<p>1.	Servlet class is loaded
<p>2.	Servlet instance is created
<p>3.	init method is invoked
<p>4.	service method is invoked
<p>5.	destroy method is invoked.


  
      </div>
               <div>
                      <h4><a href="../Servlet quiz/quiz.php">Quiz</a></h4>
                </div>
    </div>
  </div>
</body>
</html>
