<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
    crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <h1>List Of Employees</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            require_once "includes/dbh.inc.php";
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["phone"] . "</td>
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                    </td>
                  </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>