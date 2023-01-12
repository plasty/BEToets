<?php
if(isset($_POST['submit'])){
    $kenteken = $_POST['kenteken'];
    $datum = $_POST['Datum'];
    $mankement = $_POST['Mankement'];
    //connect to the database
    $conn = mysqli_connect("localhost", "root", "", "DBToets");

    $query = "SELECT auto.kenteken FROM mankement INNER JOIN auto ON mankement.autoId = auto.id WHERE mankement.autoId = '$autoId'";
    $query = "INSERT INTO mankement (Kenteken, Datum, Mankement) VALUES ('$autoId', '$datum', '$mankement')";
    var_dump($query);
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
?>