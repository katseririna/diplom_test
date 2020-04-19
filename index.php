
<?php
    include_once './includes/db.php';
?>


<!DOCTYPE html>
<html>

<head>
    <title>Ira</title>
    <style>
        button {
            background: green;
            color: white;
        }
    </style>
</head>

<body>
    <?php 
         dbConnTest();
    ?>


    <form action="includes/insert.php" method="POST">
        <label for="name_input">Name: </label>
        <input type="text" name="name" id="name_input" placeholder="Name" required>
        <br>
        <label for="surname_input">Surname: </label>
        <input type="text" name="surname" id="surname_input" placeholder="Surname" required>
        <br>
        <label for="phone_input">Phone No: </label>
        <input type="number" name="phone" id="phone_input" placeholder="Phone No" required>
        <br>
        <button type="submit" name="insert_button">Insert</button>
    </form>
    <p>
        <form method="post"> 
            <input type="submit" name="print_table"
                    class="button" value="Show Table" /> 
        </form>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
            </tr>
            <?php  
                if(array_key_exists('print_table', $_POST)) { 
                    showTable(); 
                }
            ?>

        </table>
    </p> 
</body>
</html>