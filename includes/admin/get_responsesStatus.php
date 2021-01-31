<?php

    require '../db_connection.php';
    $sql = "SELECT response_status FROM entries GROUP BY response_status";
    $stmt = mysqli_stmt_init($conn);
    $array_response_status = array();
    

    if (!mysqli_stmt_prepare($stmt, $sql)) {

        echo 'Failed SQL statement';
        exit();
     
    } else {
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        while ($row = mysqli_fetch_assoc($result)) {
            $array_response_status[] = $row['response_status'];
        }

        echo json_encode($array_response_status);
    }

?>