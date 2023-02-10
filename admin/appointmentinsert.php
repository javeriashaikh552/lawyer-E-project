<?php
include_once('include/config.php');
 $name = $_POST['name'];
 $email = $_POST['email'];
 $Date = $_POST['Date'];
 $Service = $_POST['Service'];
 $Time = $_POST['Time'];
 $image= $_FILES['image'];
 $imagename = $image['name'];
 $tempiamgename = $image['tmp_name'];

 mysqli_query($conn,"insert into appointment values(null,'$name','$email','$Date','$Service','$Time','$imagename')");

 header('location:appointment.php');
?>

<script>
   window.location.assign("appointment.php");
</script>