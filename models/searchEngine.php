<?php

include('../config/database.php');

$value = $_POST['search'];

$sql = "SELECT * FROM t_requestid WHERE rd_name LIKE '%$value%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td style="text-align: center;">
                <?= $row['rd_sid'] ?>
            </td>
            <td>
                <?= $row['rd_name'] ?>
            </td>
            <td class="d-grid">
                <button type="button" 
                class="btn btn-sm btn-block btn-success" 
                data-bs-toggle="modal"
                data-bs-target="#view-details">
                    View
                </button>
            </td>
        </tr>
        <?php
    }
} else {
    echo "0 results";
}

$conn->close();