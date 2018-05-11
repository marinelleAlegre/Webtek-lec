<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Node.Js</title>
  <link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
  <script type="text/javascript" src="style/accordian.pack.js"></script>
</head>

<body onload="new Accordian('basic-accordian',5,'header_highlight');">
  <div id="logo"><h1>Node.Js</h1></div>
  <div id="basic-accordian" >
    <div id="test-header" class="accordion_headings header_highlight">Home</div>
    <div id="test-content">
      <div class="accordion_child">
        <h1>Tutorials to Node.JS </h1>
          <h2> What is Node.js?</h2>
        <p>Node.js is a runtime environment for building fast and scalable network applications easily with Javascript. Node.js uses an event driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data intensive real time applications that run across distributed devices. It provides a rich library of various JavaScript modules which simplifies the development of web applications using Node.js to a great extent.</p>

        <h2>Features</h2>
        <p>Node.js is asynchronous and event driven. The APIs of Node.js is non-blocking. A Node.js server based will never wait for any of the APIs to return certain data. The server moves to the next API after calling it and a notification mechanism of events of Node.js helps the server to get a response from the previous API calls. It is very fast. There are no bufferings. NOde.js library is fast in code execution. It is single threaded but highly scalable.</p>
        <ul>
          <li>Asynchronous and Event Driven</li>
          <li>Very Fast</li>
          <li>Single Threaded but Highly Scalable</li>
          <li>No Buffering </li>
            <li>License</li>
        </ul>
      </div>
    </div>
    <div id="test1-header" class="accordion_headings">Environmental Set-Up</div>
    <div id="test1-content">
      <div class="accordion_child">
        <p>Node.js is an open source, cross-platform runtime environment for developing server-side and networking applications. Node.js applications are written in JavaScript, and can be run within the Node.js runtime on OS X, Microsoft Windows, and Linux.</p>
        <h2>Example of a table</h2>
        <h4>Local Environtment Setup</h4>
          <p>
            There is a need for a text editor application and Node.js binary installable softwares to setup the environment for Node.js
        </p>
          <h4>Text Editor</h4>
        <p>
           A tex editor is where a Node.js program is will be written. Examples of these editors are Windows notepad, OS Edit command, Epsilon and EMACS. The created files with an editor are called source files and contain program source code. The source files for Node.js programs are typically named with the extension ".js". 
        </p>
          <h4>Executing a file</h4>
        <p>
            1. After installing Node.js, create a file that is named with the extension ".js". <br> 
            2. For example, in a file named index.js type the code: <br>
            <b> console.log("HelloNode.js")</b><br>
            3. Run the file using Node.js and you will be able to see the output with the code:<br>
            <b> $ node index.js</b>
            
        </p>
      </div>
    </div>
    <div id="test2-header" class="accordion_headings">Creating First Application</div>
    <div id="test2-content">
      <div class="accordion_child">
         <p>
            The Node.js has three main components for you to actually create an application. We use the require directive to load Node.js modules, Apache HTTP Server for creating servers, and read request and return request taht will read the HTTP request made by the client which can be a browser or a console and return the response.
            <br>
            <br>
            Step 1<br>
            Import required module - we use the require directive<br>
            <b>var http=require("http")</b>
            <br>
            <br>
            Step 2<br>
            Create Server - use the created http instance from the first step and call the <b>http.createServer() </b> method and bind it with a port like at port 8081 using the listen method.
            <br>
            <br>
            http.createServer(funtion(request,response){<br>
            //Send the HTTp header<br>
            //HTTP Status:200:OK<br>
                //Content Type:text/plain<br>
                 response.writeHead(200,{'Content-Type': 'text/plain'});<br>
                    //Send the response body as "Hello NodeJS"<br>
                 response.end('Hello NodeJS\n');}).listen(8081);<br>
            //Console will print the message<br>
            console.log('Server running at http://localhost:8081/');<br>
            <br>
            Step 3<br>
            Testing request and response - put the import required module and create server in a file named index.js then run the code in your Node.js command prompt:<br>
            <b>node main.js</b><br>
            Now we have created an application where we will be able to see the result in the web browser with the localhost and the port we have providded in the code of the server.
        </p>
      </div>
    </div>
    <div id="test3-header" class="accordion_headings">Text Based Response</div>
    <div id="test3-content">
      <div class="accordion_child">
             <h5>node.js code:</h5>
        
                                <p> var http = require('http'); <br>
                                    <br>
                                    http.createServer((request,response){<br>
                                    response.write('This is a sample of a simple text-based Response written in node.js');<br>
                                    response.end();<br>
                                    }).listen(8081);
                                </p>
                            <h5>html code:</h5>
                                <p>
                                    -!DOCTYPE html- <br>
                                    -html lang="en"-<br>
                                    -head-<br>
                                    -title- Server-Side Web Scripting: Node.js -/title-<br>
                                    -meta charset="UTF-8"-<br>
                                    -/head-<br>
                                    -body-<br>
                                    -h1-Node.js-/h1-<br>

                                    -h2- Simple Text-Based Response (HTML) -/h2-<br>
                                    -p- -a href="http://localhost:8001/hello" target="_blank"-Hello, Node.js! -/a- -/p-<br>
                                    -/body-<br>
                                    -/html-<br></p>
        </div>
    </div>
    <div id="test4-header" class="accordion_headings">File System Module</div>
    <div id="test4-content">
      <div class="accordion_child">
        <p>
                                <h5>node.js code: Read file</h5>
                            
                                1. Create a demo html file : demo.html<br>
                            
                                Code:<br>
                            
                                var http = require('http');<br>
                                var fs = require('fs');<br>
                                https.createServer(function(req, res){<br>
                            fs.readfile('demo.html', funtion(err, data){<br>
                            res.writeHead(200, {content-Type': 'text/html'});<br>
                            res.write(data);<br>
                            res.end();<br>
                            })<br>
                            }).listen(8081);
                            
            </p>
      </div>
    </div>
  </div>
  </div>
</body>
</html>
