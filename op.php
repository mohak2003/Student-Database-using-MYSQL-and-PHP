<?php include 'connect.php'; 

if (isset($_POST['add'])) {header('location:datab.php');}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>


<body>
    <div style="padding: 5px 150px"> 
    
    
        <table class="table table-striped">
            <tr>
            
                <th>Name</th>
                <th>Roll No.</th>
                <th>Dept</th>
                <th>Hostel</th>
                <th>Actions</th>
            </tr>
            
            <<?php
        $sql = "Select * from `details`";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id=$row['Serial No.'];
                $n=$row['Name'];
                $r=$row['Roll No.'];
                $d=$row['Dept.'];
                $h=$row['Hostel'];
                echo '<tr>
                
                <td>'.$n.'</td>
                <td>'.$r.'</td>
                <td>'.$d.'</td>
                <td>'.$h.'</td>
                <td><button type="button"  class="btn btn-warning" style="margin-right:20px;">
                 <a href="edit.php?editid='.$id.'" style="text-decoration:none; ">Edit</a> </button>
                 <button name="button" class="btn btn-danger">
                 <a href="delete.php?deleteid='.$id.' " style="text-decoration:none; " > Delete</a></button></td>
            </tr>';

            }
        }
        ?>
            

        </table>
        <button name="add" type="button" class="btn btn-outline-primary" style="margin-top:20px; margin-left:670px;"><a href="datb.php" style="text-decoration:none; "> Add User</a></button>

    </div>
</body>

</html>