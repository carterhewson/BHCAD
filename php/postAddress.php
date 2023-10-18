<?php require '../include/connect.php'?>

<?php
    $id = $_POST["id"];
    $postal = $_POST["postal"];
    $streetAddress = $_POST["street"];
    //$altered = 1; Useful for multiple users
    $sql = "UPDATE `policeincidents` SET `postal` = '$postal', `streetAddress` = '$streetAddress' WHERE `id` = 1";
    $result = $conn->query($sql);
?>