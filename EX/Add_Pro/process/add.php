
<?php 

session_start();
$data=$_SESSION["data"];
?>
<h1>welcome to adding page</h1>
<p>this is your data below:</p>
<?php 

foreach($data as $k=>$v){
    echo $v;
}
?>
