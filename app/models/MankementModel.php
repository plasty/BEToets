<?php
class MankementModel {
    public function addMankement($kenteken, $mankement) {
        //connect to the database
        $conn = mysqli_connect("host", "username", "password", "dbname");

        $query = "INSERT INTO auto (kenteken) VALUES ('$kenteken')";
        mysqli_query($conn, $query);

        $auto_id = mysqli_insert_id($conn);
        $query = "INSERT INTO mankement (auto_id, mankement) VALUES ('$auto_id', '$mankement')";
        mysqli_query($conn, $query);

        mysqli_close($conn);
    }
}

?>