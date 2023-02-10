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
$service =$_POST['service'];
$experience =$_POST['experience'];

$query ="UPDATE `service` SET `lawyer`='$lawyer',`city`='$city',`service`='$service',`experience`='$experience' WHERE   id='$id'";
$q =mysqli_query($conn,$query);

    header('location:service.php');

?>

<script>
    window.location.assign("service.php");
</script>