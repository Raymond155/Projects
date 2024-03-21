<?php
    include 'connection.php';

    $ID = $_POST['ID'];
    $Pangalan = $_POST['Pangalan'];
    $Apelyido = $_POST['Apelyido'];
    $Email = $_POST['Email'];
    $Pass = $_POST['Pass'];

    $sql = "INSERT INTO record2(ID, Pangalan, Apelyido, Email, Pass)
            VALUES('$ID','$Pangalan', '$Apelyido', '$Email', '$Pass')";

    $output = $link->query($sql);
        header("location:ui.html");

?>