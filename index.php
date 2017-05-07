<?php

if ($_GET['run']) {
  # This code will run if ?run=true is set.
  shell_exec('./test.sh');
}
if ($_GET['clear']) {
  # This code will run if ?clear=true is set.
  shell_exec('./clear.sh');
}
?>

<br>
<center>
<a href="?run=true">Click here</a>
</center>

<!DOCTYPE html>
<html>
<head>
<style>
.round-button {
	width:25%;
}
.round-button-circle {
	width: 100%;
	height:0;
	padding-bottom: 100%;
    border-radius: 50%;
	border:10px solid #cfdcec;
    overflow:hidden;
    
    background: #4679BD; 
    box-shadow: 0 0 3px gray;
}
.round-button-circle:hover {
	background:#30588e;
}
.round-button a {
    display:block;
	float:left;
	width:100%;
	padding-top:50%;
    padding-bottom:50%;
	line-height:1em;
	margin-top:-0.5em;
    
	text-align:center;
	color:#e2eaf3;
    font-family:Verdana;
    font-size:1.2em;
    font-weight:bold;
    text-decoration:none;
}

</style>
</head>
<body>
<center>
<h1>or push this button</h1>
<p>or don't...</p>

<div class="round-button"><div class="round-button-circle"><a href="?run=true" class="round-button">Button!!</a></div></div>

<br>
<br>
<br>

<p>The script that is running just adds wc -l to the text.txt file</p>
<iframe src=files/test.txt>
</iframe>

<br>
<br>
<br>

<a href="?clear=true">Clear</a>

</center>
</body>
</html>
