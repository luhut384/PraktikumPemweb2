<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Un-Shift</title>
</head>

<body>
    <?php
    $tims = ["erwin", "heru", "ali", "zaki"];
    array_unshift($tims, "joko", "wati");
    foreach ($tims as $person) {
        echo $person .  '<br/>';
    }
    ?>
</body>

</html>