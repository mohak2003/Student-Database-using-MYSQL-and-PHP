<?php
include 'connect.php';
$id=$_GET['editid'];

$sql="SELECT * from `details` WHERE `Serial No.`=$id";
$result=mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
$fname=$row['Name'];
$roll=$row['Roll No.'];
$dept=$row['Dept.'];
$hostel=$row['Hostel'];

if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $roll=$_POST['roll'];
    $dept=$_POST['dept'];
    $hostel=$_POST['hostel'];

    $sql="UPDATE `details` set `Name`='$fname',`Roll No.`='$roll',`Dept.`='$dept',`Hostel`='$hostel'
     where `Serial No.`=$id";
  $result=mysqli_query($conn,$sql);


  if($result){
    header('Location: op.php');
} else die(mysqli_error($conn));

}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">Database Update System</span>
        </div>
    </nav>
    <form style="align-self:center; padding:30px 300px;" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Full Name</span>
            <input name="fname" type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default"  value="<?php echo$fname; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Roll No.𝅸 𝅸 𝅸 𝅸 𝅸 </span>
            <input name="roll" type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" value="<?php echo $roll ;?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default"> Dept.𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 </span>
            <input name="dept" type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" value="<?php echo $dept; ?>">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Hostel 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸 𝅸</span>
            <input name="hostel" type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" value="<?php echo $hostel; ?>">
        </div>
        <button name="submit" type="submit" class="btn btn-light" style="margin-left: 25vw;">Submit </button>
 
    </form>

</body>

</html>