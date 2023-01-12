<?php
if(isset($_POST['submit'])){
    $kenteken = $_POST['kenteken'];
    $datum = $_POST['Datum'];
    $mankement = $_POST['Mankement'];
    if (strlen($mankement) > 50) 
        echo "het nieuwe mankement is meer dan 50 tekens lang en is niet toegevoegd, probeer opnieuw";
    } else{
    $conn = mysqli_connect("localhost", "root", "", "DBToets");

    $query = "SELECT auto.kenteken FROM mankement INNER JOIN auto ON mankement.autoId = auto.id WHERE mankement.autoId = '$autoId'";
    $query = "INSERT INTO mankement (Kenteken, Datum, Mankement) VALUES ('$autoId', '$datum', '$mankement')";
    $kenteken = $row['kenteken'];
    mysqli_query($conn, $query);
    mysqli_close($conn);
}
}
?>