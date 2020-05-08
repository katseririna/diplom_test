<?php
//  $dbServername = "localhost";
//  $dbUsername = "root";
//  $dbPassword = "123456789Ira@";
//  $dbName = "students";
 
//  $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword,$dbName);



 function dbConnTest() {
    $conn = mysqli_connect("localhost", "root", "123456789Ira@","students");
    echo "<p>";
    if(!$conn){
        echo "Database Connected!!!" . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    echo "Database Connected!!! ==> " . mysqli_get_host_info($conn) . PHP_EOL;
    echo "</p>";
 }

 function showTable() {
    $conn = mysqli_connect("localhost", "root", "123456789Ira@","students");
    $sql = "SELECT * FROM person;";
    $result = mysqli_query($conn, $sql);
    $rowlengh = mysqli_num_rows($result);
    if ($rowlengh > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>". $row['id']. "</td>
            <td>". $row['name']. "</td>
            <td>". $row['surname']. "</td>
            <td>". $row['phone']. "</td>
            </tr>";
        }
    }
    mysqli_close($conn);
} 

 function seacrh($name) {
    $conn = mysqli_connect("localhost", "root", "123456789Ira@","students");

    #---- Save realisation 
    #$sql = "SELECT * FROM person WHERE name = ? LIMIT 1 ";
    #$stmt = $conn->prepare($sql); 
    #if (!$stmt->bind_param("s", $name)){
    # echo "Не удалось привязать параметры: (" . $stmt->errno . ") " . $stmt->error;
    #   }
    #if (!$stmt->execute()) {
    #echo "Не удалось выполнить запрос: (" . $stmt->errno . ") " . $stmt->error;
    #                        }
    #$stmt->execute();
    #$result = $stmt->get_result();
    # while ($row = $stmt->fetch_assoc($result)) {
    #   echo "<tr>
    #        <td>". $row['id']. "</td>
    #        <td>". $row['name']. "</td>
    #        <td>". $row['surname']. "</td>
    #        <td>". $row['phone']. "</td>
    #        </tr>";
    #    }
    #}
    $sql = "SELECT * FROM person WHERE name = '".$name."' LIMIT 1 "; # bad query\ vurnable 
    $result = mysqli_query($conn, $sql);
    $rowlengh = mysqli_num_rows($result);
    if ($rowlengh > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>
            <td>". $row['id']. "</td>
            <td>". $row['name']. "</td>
            <td>". $row['surname']. "</td>
            <td>". $row['phone']. "</td>
            </tr>";
        }
    }
    mysqli_close($conn);
}  