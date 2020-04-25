
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


    <form method="POST">
        <label for="name_input">Name: </label>
        <input type="text" name="name" id="name_input" placeholder="Name" required>
        <br>
        <button type="submit" name="search_button">Search</button>
    </form>
    <p>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Surname</th>
                <th>Phone</th>
            </tr>
            <?php  
                if(array_key_exists('name', $_POST)) { 
                    seacrh($_POST['name']); 
                }
            ?>

        </table>
    </p> 
</body>
</html>