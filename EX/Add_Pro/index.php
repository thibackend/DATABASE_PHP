<?php 
require "database/connect.php"; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        th, td {
            text-align: center;
        }
        th {
            font-weight: bold;
        }
        img {
            max-height: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Product Table</h1>
        <a href="A_Updt.php?add=add"><button class="btn btn-success"> ADD</button></a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Amount</th>
                    <th>Search Keyword</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
            $query ="SELECT *FROM product_ex;";
            $result =mysqli_query($conn,$query);

            ?>

            <tbody>
            <?php while($data = mysqli_fetch_assoc($result)){  ?>
                <tr>
                    <td><?php echo $data["idsp"]?></td>
                    <td><?php echo $data["tensp"]?></td>
                    <td><?php echo $data["danhmucsp"]?></td>
                    <td><?php echo $data["gia"]?></td>
                    <td><?php echo $data["ptgiam"]?></td>
                    <td><?php echo $data["soluong"]?></td>
                    <td><?php echo $data["tukhoakiem"]?></td>
                    <td><?php echo $data["mota"]?></td>
                    <td>
                        <a href="A_Updt.php?add=0 && id=<?php echo $data["idsp"]?>">update</a> 
                        <a href="A_Updt.php?id='<?php echo $data["idsp"];?>'">delete</a>
                    </td>
                </tr>
                <?php } ?>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>