<?php
include_once('connect.php');
$name=$_POST['name'];
$dept=$_POST['dept'];
$email=$_POST['email'];
$type=$_POST['type'];

//generating id
$que1="SELECT count(*) as total from staff where type like '".$type."%'";
$result=mysqli_query($conn,$que1);
$row = mysqli_fetch_assoc($result);
$id=$row['total']+1;
$id=$type.$id;


//random password

 $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];

}
$pass= implode($pass);
echo $pass;
$que2="INSERT into staff (id,name,department,email,password,type) values ('$id','$name','$dept','$email','$pass','$type')";
if(mysqli_query($conn,$que2))
echo "success";
else
echo "badd coding";

?>