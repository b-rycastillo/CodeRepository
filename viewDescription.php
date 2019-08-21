

<?php

$id = isset($_GET['id'])? $_GET['id'] : "";
$connect = @mysqli_connect('127.0.0.1','root','12345678','demo') or
        die('connection is not successful ERROR:'. mysqli_connect_error());

$sql = "SELECT * FROM login_blogs where blog_id='$id'";

//$result = mysqli_query($connect, $sql);;
$result = $connect->query($sql) or die($connect->error);

       while($row = $result->fetch_assoc()) {

header('Content-Type: text/txt');
header('Content-Disposition: attachment; filename="description.txt"');
header('Pragma: public');
ob_clean();
flush();
echo $row['description'];
 //echo '<img src="data:image/jpg;base64,' . base64_encode($row['explane']) . '">';
//echo base64_decode($a);

      
    
} 
mysqli_close($connect);
exit;

?>
