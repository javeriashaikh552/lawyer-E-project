<?php
include_once('include/config.php');
 $client = $_POST['client'];
 $city = $_POST['city'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $fax = $_POST['fax'];
 $password = $_POST['password'];

 mysqli_query($conn,"insert into client values(null,'$client','$city','$address','$email','$phone','$fax','$password')");

 header('location:client.php');
?>

<script>
   window.location.assign("client.php");
</script>
