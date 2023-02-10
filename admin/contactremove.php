<?php
$conn = mysqli_connect("localhost", "root", "", "law"); 

if (!$conn) {
    echo "connection refuse";
}
else {
    echo "connection established";
}

    $id = $_GET["id"];
    $query = "DELETE FROM `contact` WHERE `id` = $id";
    mysqli_query($conn,$query);
?>

<script>
    window.location.assign("contact.php");
</script>
