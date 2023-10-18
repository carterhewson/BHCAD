<?php
    $id = 1;
    $sql = "SELECT * FROM `policeincidents` WHERE `id` = $id";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $incidentNotes = $row["incidentNotes"];
        $postal = $row["postal"];
        $streetAddress = $row["streetAddress"];
        $incidentType= $row["incidentType"];
    }
?>