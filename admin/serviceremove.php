<?php
$conn = mysqli_connect("localhost", "root", "", "law"); 

    $id = $_GET["id"];
    $query = "DELETE FROM `service` WHERE `id` = $id";
    mysqli_query($conn,$query);
?>

<script>
    window.location.assign("service.php");
</script>
