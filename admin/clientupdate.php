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
$client =$_POST['client'];
$city =$_POST['city'];
$address =$_POST['address'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$fax =$_POST['fax'];
$password =$_POST['password'];

$query ="UPDATE `client` SET `client`='$client',`city`='$city',`address`='$address',`email`='$email',`phone`='$phone',`fax`='$fax',`password`='$password' WHERE   id='$id'";
$q =mysqli_query($conn,$query);
if(!$q){
    echo "bye";
}
else{
    echo 'hi';

    header('location:client.php');
}
?>


<script>
    window.location.assign("lawyer.php");
</script>