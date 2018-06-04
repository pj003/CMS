<?php
include_once('session2.php');
include_once('connect.php');
$id=$_SESSION['id'];
$sql="SELECT handling from staffsub where sid='$id'";
$result_set=mysqli_query($conn,$sql);
//$rows = mysqli_num_rows($result_set);
//echo"helo";
$handling= array();
while($query=mysqli_fetch_assoc($result_set))
{
$handling[]=$query;
}



?>
<!DOCTYPE HTML>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


	<head>
		<title>UPDATE LOG</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

<link rel="stylesheet" href="assets/css/main.css" />
	<script type="text/javascript">
function loadQueryResults(str) {

 
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
  xmlhttp.open("GET","fread.php?inputval="+str,true);
  xmlhttp.send();
}
function getComboA(str) {
    xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("DisplayDiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","uplog.php?inputval="+str,true);
  xmlhttp.send();
}


</script>	
 

 
	</head>

	<body background="blue-background.jpg">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
<header>
						<div class="container">
		
  
    
 <h1> Welcome Ms.XYZ </h1>

         <center>

<form id="saveuser" >
	      
         
            
	 <select  id="details"  onchange="loadQueryResults(this.value);myup1(this);">
                <option selected disabled hidden>CLASS</option>
<?php
for($i=0;$i<count($handling);$i++)
{?>
<option value="<?php echo $handling[$i]['handling'] ?>">
<?php
echo $handling[$i]['handling'];
?>
</option>
<?php
}
     ?>           
            </select>
      
            
            
               
		
		  
</div>

		  		
				   </div>
</form>
</center>

       </div>
   
  </div>
</header>
  

<div id="DisplayDiv" >
            <!-- This is where test2.php should be inserted -->
        </div>
			<div id="right" style="float:right; width:50%;"> <h3> Contents Done. </h3><br>


<p id="info">  </p> 
<select id="selectBox" onchange="changeFunc();">
<option selected disabled hidden>UNIT</option>
   <option value="1">1</option>
   <option value="2">2</option>
<option value="3">3</option>
   <option value="4">4</option>
  </select>
<button  onclick="myup()">update</button>

</div>              			

				

<script type="text/javascript">
var i=0,size=0;;
var value;
var unit;
var selectBox;
var selectedValue;
data=new Array();
function loadDet(text)
{

data.push(text);

document.getElementById("info").innerHTML =document.getElementById("info").innerHTML+"<br>"+data[i];
i++;

}
function myup()
{ 
window.location.href = "uplog.php?name=" + i + "&class=" +value + "&unit=" +selectedValue; 

 }
function myup1(str)
{
value=str.value;

}
function changeFunc() {
    selectBox = document.getElementById("selectBox");
     selectedValue = selectBox.options[selectBox.selectedIndex].value;
    alert(selectedValue);
   }
   


</script>



	<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="staff.php">HOME</a></li>
								<li>
									<a href="up.php">UPDATE LOG</a>
									
								</li>
								<li><a href="left-sidebar.html">VIEW ATTENDANCE</a></li>
								<li><a href="mail.php">GROUP MAIL</a></li>
								
<li><a href="logout.php">LOGOUT</a></li>
							</ul>
						</nav>
				</div>


			

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	</body>
</html>				