<?php
//include_once('session2.php');
echo $_SESSION['id'];
?>
<!DOCTYPE html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
<html class=" js no-touch" lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>update attendance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your page description here">
    <meta name="author" content="">
    <!-- css -->
    <link href="menu.css" rel="stylesheet">

	<link href="test3.css" rel="stylesheet">




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




</head>
<body>
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
            
             
		  
		  		 
<div class="form-group col-md-2" style="overflow:hidden"> 
 <a class="btn btn-primary"  href="logout.php">LOGOUT</a>
</div>

       </div>
    </form>
  </div>
  
</div>



	</header>	</center>
	<!-- end header -->
<br><br><Br>


<div id="DisplayDiv"> hey </div>
<div id="demo"></div>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.js"></script>
	<script src="custom.js"></script>

</body></html>	