<?php
    require_once "db.php";
    $conn = new mysqli(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE);
    $sql = "SELECT * FROM incident_type";
    ECHO $sql;
    $conn->close();
    ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
