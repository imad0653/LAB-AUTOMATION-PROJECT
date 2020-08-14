<?php
require_once('connect.php');
 $output='';
 $sql = "SELECT * FROM `types_product` where cid='".$_POST['courseID']."'  ORDER BY name";
 $result = mysqli_query($conn,$sql) ;
 $output .='  <option id="Selecter" disabled selected>Please select</option>';
 while($row = mysqli_fetch_assoc($result)){
    $output .='  <option value="'.$row['id'].'" >'.$row['name'].'</option>';
 }
 echo $output;
?>