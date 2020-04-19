<?php

$conn = mysqli_connect("localhost", "root", "123456789Ira@","students");
$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];

$sql = "INSERT INTO person (`name`, `surname`, `phone`) VALUES ('$name', '$surname', '$phone');";

mysqli_query($conn, $sql);
mysqli_close($conn);

header("Location: ../index.php?insert=success");
