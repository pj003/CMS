<?php

include_once('connect.php');


?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
	.container{
		margin-top: 20px;
	}
</style>
<script type="text/javascript">
function fetchAttn(regno)
{



if (regno=="") {
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
  xmlhttp.open("GET","modifyreg.php?regno="+regno,true);
  xmlhttp.send();
}

</script>
<title>Modification</title>
<body background="blue-background.jpg">
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<div class="panel panel-default">
				<div class="panel-heading">				
					<h3 class="panel-title" style="line-height:35px;">Modify Attendance<div class="btn-group pull-right">
						  <button type="button" class="btn btn-info">Modify</button>
						  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
						    <span class="caret"></span>
						    <span class="sr-only">Toggle Dropdown</span>
						  </button>
						  <ul class="dropdown-menu" role="menu" id="export-menu">
						    <li id="export-to-excel"><a href="#">Export to excel</a></li>
							
						    <li class="divider"></li>
						    <li><a href="#">Other</a></li>
						  </ul>




						</div>
					</h3>
				</div>



				<div class="panel-body">
					

                                        <input type="textbox" value='' id='hidden-type' name='regno' onchange="fetchAttn(this.value)"/>
						
				  	
	                 
	                 
				</div>
<div id="DisplayDiv"> </div>
			
<script  type="text/javascript">
	$(document).ready(function() {
	
		jQuery('#export-menu li').bind("click", function() {
			var target = $(this).attr('id');
			switch(target) {
				case 'export-to-excel' :
				$('#hidden-type').val(target);
				//alert($('#hidden-type').val());
				$('#export-form').submit();
				$('#hidden-type').val('');
				break
				
			}
		});
    });
</script>