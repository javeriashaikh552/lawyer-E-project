<?php
$conn = mysqli_connect("localhost", "root", "", "law"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}

    $id = $_GET["id"];
    $query = "DELETE FROM `testimonial` WHERE `id` = $id";
    mysqli_query($conn,$query);
?>

<script>
    window.location.assign("testimonial.php");
</script>
