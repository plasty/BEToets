<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3><?= $data['title']; ?></h3>
    <form action="<?= URLROOT; ?>/lessen/addTopic" method="post">
        <label for="topic">Onderwerp</label><br>
        <input type="text" name="topic" id="topic"><br>

        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <input type="submit" value="Toevoegen">
    </form>
</body>

</html>