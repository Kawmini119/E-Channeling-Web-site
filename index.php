<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href ="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel = "stylesheet" href="css/style.css">
</head>
<body style = "margin: 50px;">
    <h1>list of employe</h1>
    <br>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $passward = "";
            $database ="mystore";

            //create connection
            $connection = new mysqli($servername, $username, $passward, $database);
            
            //check connection
            if($connection->connect_error){
                die("connection faild : " . $connection->connect_error);
            }

    
            //read all row from database table
            $sql = "SELECT * FROM employees";
            $result = $connection->query($sql);

            if (!$result){
                die("Invalid query: " . $connection->error);
            }

            //read data of each row
            while($row = $result->fetch_assoc()){
                echo"<tr>
                <td>" . $row["id"]. "</td>
                <td>".$row["first_name"]."</td>
                <td>".$row["last_name"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["phone"]."</td>
                <td>".$row["address"]."</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='update'>Update </a>
                    <a class='btn btn-danger btn-sm' href='delete'>Delete </a>

                </td>
            </tr>";
            }

            ?>

        </tbody>
    </table>

</body>
</html>