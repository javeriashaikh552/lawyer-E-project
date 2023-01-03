<?php
error_reporting(0);
$conn = mysqli_connect("localhost","root","","law");
if ($conn) {
    echo "connection refuse";
}
else{
    echo "connection established";
}


$id =$_POST['id'];
$lawyer =$_POST['lawyer'];
$city =$_POST['city'];
$address =$_POST['address'];
$email =$_POST['email'];
$mobile =$_POST['mobile'];
$fax =$_POST['fax'];
$password =$_POST['password'];

$query ="UPDATE `lawyer` SET `lawyer`='$lawyer',`city`='$city',`address`='$address',`email`='$email',`mobile`='$mobile',`fax`='$fax',`password`='$password' WHERE   id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:lawyer.php');
}
?>


<script>
    window.location.assign("lawyer.php");
</script>