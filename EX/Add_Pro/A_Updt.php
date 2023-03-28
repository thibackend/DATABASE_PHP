<?php
$add=$_GET['add'];
?>
<html>
    <link rel="stylesheet" href="style.css">
    <body>
        <form method="POST" action="<?php if(isset($_POST['update'])){
        $action="../update.php";
        }elseif(isset($_POST["add"])){
        $action="../add.php";
        } echo $action;?>" enctype="multipart/form-data"> 
        <table>
            <tr>
                <th> <label for="tenSP">Tên sản phẩm:</label></th>
                <th> <input type="text" id="tenSP" name="tenSP" required><br></th>
            </tr>
            <tr>

                <th> <label for="DanhMuc">Danh mục sản phẩm:</label></th>
                <th> 
                    <select name="DanhMucSP" id="DanhMuc" required>
                        <?php
                            $myArray = array("Quần Tây Nam", "Áo khoác Nam", "áo phong Nam");

                            foreach ($myArray as $option){
                                echo "<option value='$option'>$option</option>";
                            }
                        ?>
                    </select>
                </th>


            </tr>
            <tr>
                <th><label for="Price">Giá:</label></th>
                <th> <input type="number" id="Price" name="Price" required><br></th>
            </tr>
            <tr>
                <th><label for="PTGiam">Phần trăm giảm giá:</label></th>
                <th> <input type="number" id="PTGiam" name="PTGiam" min="0" max="100"><br></th>
            </tr>
            <tr>
                <th><label for="soluong">Số lượng:</label></th>
                <th> <input type="number" id="soluong" name="soluong" required><br></th>
            </tr>
            <tr>
                <th> <label for="img">Hình ảnh:</label></th>
                <th> <input type="file" id="img" name="img" accept="image/*"><br></th>
            </tr>
            <tr>
                <th> <label for="search">Từ khóa tìm kiếm:</label></th>
                <th><input type="text" id="search" name="search"><br></th>
            </tr>
            <tr>
                <th> <label for="desc">Mô tả:</label></th>
                <th><textarea id="desc" name="desc"></textarea><br></th>
            </tr>


        </table>
    <?php if($add =="add"){ ?>
            <input type="submit" name="add" value="Thêm">
    <?php }else {  
        $id = $_GET['id'];
         ?>
            <input type="submit" name="update" value="Update">
            <?php }?>
        </form>
       

    </body>
</html>