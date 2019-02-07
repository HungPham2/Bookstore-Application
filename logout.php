<?php


session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: obs.html"); // Redirecting To Home Page
}
?>