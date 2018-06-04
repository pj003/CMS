<?php
$value = "'text'"; // Works, must use single quotes when onclick function is wrapped in double quotes
// As shown in my previous post, the opposite is true - must use double quotes when onclick function is wrapped in single quotes
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta name="GENERATOR" content="SAPIEN Technologies PrimalScript 3.1">
<title>Text Color Change Example</title>
<script>
function myFunction(parameter){
element = document.getElementById(parameter);
element.style.color = 'blue';
}
</script>
</head>
<body>
<p id="text">Change me</p><br>
<button onclick="myFunction(<?php echo $value?>)">Click me</button>
</body>
</html>