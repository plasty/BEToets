<?php

    $kenteken = $_POST['kenteken'];
    $mankement = $_POST['mankement'];
    $query = "INSERT INTO mankement (kenteken, mankement) VALUES ('$kenteken', '$mankement')";

?>

<h3><?= $data['title']; ?></h3>
<h4><?= 'Naam instructeur: ' . $data['instructorName']; ?></h4>
<h4><?= 'Email instructeur: ' . $data['Email']; ?></h4>
<h4><?= 'Kenteken Auto: ' . $data['kenteken']; ?></h4>


<table border="1">
    <thead>
        <th>Datum</th>
        <th>Mankement</th>
    </thead>
    <tbody>
        <?= $data['rows']; ?>
    </tbody>
</table>

<form action="submit.php" method="post">
  Kenteken: <input type="text" name="kenteken"><br>
  Mankement: <input type="text" name="mankement"><br>
  <input type="submit" value="toevoegen mankement">
</form> 
