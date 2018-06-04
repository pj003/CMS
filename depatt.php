<html>

<script type="text/javascript">

function myFunc() {
document.getElementById("demo").innerHTML="koayy";
}

function loadStud(str)
{
alert(str);
if (str=="") {
    document.getElementById("DisplayDiv").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("DisplayDiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","fetchStud.php?inputval="+str,true);
  xmlhttp.send();
}
</script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body background="blue-background.jpg">
	<div style="background:#ffff; font-size:30px; text-align:center; line-height:160px; color:#fff; font-weight:bold;"><h3><?php echo $login_session; ?></h3>
    </div><br><br><br>
	<!-- start header -->
<center>	<header>	
		<div class="container">
  <div class="col-md-9 col-md-offset-2">
    <form>
      <div class="form-inline row">
         <div class="form-group col-md-2" style="overflow:hidden">
           <select class="form-control" onchange="loadStud(this.value)">
                <option selected disabled hidden>CLASS</option>
                <option value="1csea">I CSE A</option>
                <option value="1cseb">I CSE B</option>
                <option value="1csec">I CSE C</option>
                <option value="1csed">I CSE D</option>
            </select>
	      </div>
    </body>
<div id="DisplayDiv"> hey </div>
<div id="demo"></div>
<script src="jquery.js"></script>
	<script src="custom.js"></script>

</html>        