
<?php 
session_start();
require "../database/connect.php";
$data=$_SESSION["data"];

?>
<h1>welcome to adding page</h1>
<p>this is your data below:</p>
<?php 
$query= "INSERT INTO product_ex(tensp,danhmucsp,gia,ptgiam,soluong,tukhoakiem,mota) VALUES('$data[tenSP]','$data[DanhMucSP]','$data[Price]','$data[PTGiam]','$data[soluong]','$data[search]','$data[desc]');";
$result =mysqli_query($conn,$query);
if($result ==true){
    header("location:../index.php");
}
?>
