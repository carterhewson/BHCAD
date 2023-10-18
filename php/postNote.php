<?php require '../include/connect.php'?>

<?php
    $id = $_POST["id"];
    $incidentNotes = $_POST["incidentNotes"];
    //$altered = 1; Useful for multiple users
    $sql = "UPDATE `policeincidents` SET `incidentNotes` = '$incidentNotes' WHERE `id` = $id";
    $result = $conn->query($sql);
?>