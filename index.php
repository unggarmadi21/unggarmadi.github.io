<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 1</title>
</head>

<body>
    <h1>Latihan 1</h1>
    <?php
    $A = 123; // variable global
    function Test()
    {
        $A = "Test"; // variable local
        echo "Nilai A dalam fungsi = $A \n";
    }
    Test();
    echo "Nilai A luar fungsi = $A \n";
    ?>
</body>

</html>
