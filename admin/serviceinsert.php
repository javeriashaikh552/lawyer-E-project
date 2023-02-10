<?php
 include_once('include/config.php');
  $lawyer = $_POST['lawyer'];
  $city = $_POST['city'];
  $service = $_POST['service'];
  $experience = $_POST['experience'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into service values(null,'$lawyer','$city','$service','$experience','$imagename')");

  header('location:service.php');
?>

<script>
    window.location.assign("service.php");
</script>
