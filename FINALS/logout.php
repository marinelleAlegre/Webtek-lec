<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: ../FINALS/index.html"); // Redirecting To Home Page
}
?>