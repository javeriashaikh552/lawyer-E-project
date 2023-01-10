<?php
include_once('include/config.php');
  $name = $_POST['name'];
  $profession = $_POST['profession'];
  $description = $_POST['description'];
  $image= $_FILES['image'];
  $imagename = $image['name'];
  $tempiamgename = $image['tmp_name'];

  move_uploaded_file($tempiamgename,'images/'.$imagename.'');
  $query ="INSERT INTO `testimonial` VALUES ('null','$name','$profession','$description','$imagename')";

  $q= mysqli_query($conn,$query);
  
  header('Location:testimonial.php');
?>


