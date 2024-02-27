<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM t_requestid WHERE (rd_name LIKE '%$value%' OR rd_sid LIKE '%$value%')";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;"><?= $row['rd_sid'] ?></td>
            <td><?= $row['rd_name'] ?></td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();