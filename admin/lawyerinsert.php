<?php
 include_once('include/config.php');
  $lawyer = $_POST['lawyer'];
  $city = $_POST['city'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $fax = $_POST['fax'];
  $password = $_POST['password'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  mysqli_query($conn,"insert into lawyer values(null,'$lawyer','$city','$address','$email','$mobile','$fax','$password','$image')");

  header('location:lawyer.php');
?>

<script>
    window.location.assign("lawyer.php");
</script>
