<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🚧 Dev Teste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['test'])) {
        // if (in_array('value1', $_POST['test'])) {
        //     echo "Option1 was checked!";
        // }
        // if (in_array('value2', $_POST['test'])) {
        //     echo "Option2 was checked!";
        // }

        // switch (isset($_POST['test'])) {
        //     case in_array('value1', $_POST['test']):
        //         echo "Option1 was checked!";
        //         break;
        //     case in_array('value2', $_POST['test']):
        //         echo "Option2 was checked!";
        //         break;
        // }
    }
    ?>
    <form action="index.php" method="post">
        <input type="checkbox" name="test[]" value="value1"> Option 1
        <input type="checkbox" name="test[]" value="value2"> Option 2
        <input type="submit" value="Submit">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>