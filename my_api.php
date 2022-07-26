<?php
    // Create the API from the starting database 
    require __DIR__ . '/database.php';
    header('Content-Type: application/json');
    echo json_encode($database);
?> 