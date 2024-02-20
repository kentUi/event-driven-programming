<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Updated Version 1.1
    include('./config/database.php');

    $sql = "SELECT * FROM ph_region WHERE regDesc LIKE 'region i%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row['regDesc'] . "<br/>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
</body>

</html>