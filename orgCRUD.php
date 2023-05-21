<?php
include('dbconnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- CRUD TABLE IMAGE STYLING -->
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <table class="table">
        <thead class="table-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Gender</th>
            <th scope="col">Race</th>
            <th scope="col">Description</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <!--PHP CODE TO DISPLAY DB DATA TO TABLE-->
        <?php
            $q = "SELECT * FROM `childinfo`";
            $res  = mysqli_query($conn, $q); 

            if($res){
                while($row=mysqli_fetch_assoc($res)){
                    $id = $row['Id'];
                    $name = $row['Name'];
                    $age = $row['Age'];
                    $gender = $row['Gender'];
                    $race = $row['Race'];
                    $desc = $row['Description'];
                    $img = $row['Image'];

                    echo'
                    <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$age.'</td>
                        <td>'.$gender.'</td>
                        <td>'.$race.'</td>
                        <td>'.$desc.'</td>
                        <td><img src ='.$img.' /></td>
                        <td>
                            <button class="btn btn-success"><a class="text-light text-decoration-none" href="edit.php?editid='.$id.'">Edit</a></button>
                            
                            <button class="btn btn-warning"><a class="text-light text-decoration-none" href="delete.php?deleteid='.$id.'">Delete</a></button>
                        </td>
                    </tr>
                    ';
                }
            }


        ?>

        <!-- <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>-->
        </tbody>
    </table>
</body>
</html>