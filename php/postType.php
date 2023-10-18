<?php require '../include/connect.php'?>

<?php
    $id = $_POST["id"];
    $incidentNotes = $_POST["incidentType"];
    //$altered = 1; Useful for multiple users
    $sql = "UPDATE `policeincidents` SET `incidentType` = '$incidentType' WHERE `id` = $id";
    $result = $conn->query($sql);
?>