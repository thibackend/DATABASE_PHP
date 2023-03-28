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
                    <th>Image</th>
                    <th>Search Keyword</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Product Name</td>
                    <td>Category Name</td>
                    <td>$19.99</td>
                    <td>10%</td>
                    <td>50</td>
                    <td><img src="image.jpg" alt="Product Image"></td>
                    <td>Keyword1, Keyword2</td>
                    <td>Product Description</td>
                    <td>
                        <a href="A_Updt.php?add=0 && id=<?php $id= 3; echo $id;?>">update</a> 
                        <a href="A_Updt.php?id='<?php echo 3;?>'">delete</a>
                    </td>
                </tr>
                <!-- Add more rows here -->
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>